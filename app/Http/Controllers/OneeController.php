<?php

namespace App\Http\Controllers;

use App\Mail\appointementEmail;
use App\Models\agent_centre;
use App\Models\categorie_reclamation;
use App\Models\clients;
use App\Models\Event;
use App\Models\info;
use App\Models\reclamations;
use Illuminate\Http\Request;
use App\Models\reclamationtraitee;
use App\Models\reclamationaffectee;
use App\Models\services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class OneeController extends Controller
{
    
        public function ajoutreclama(Request $request)
        {

           request()->validate([
                'ID_RECLAMATION' => 'required',
            ]);
            if (Auth::check()) {
            $task = new reclamationaffectee();
            $task->ID_REC_AFF  = $request->ID_RECLAMATION;
            
            $clientId = Auth::user()->id; 
            $task->ID_A_ONEE = $clientId;
            $task->save();
            $reclamations =reclamations::findOrFail($request->ID_RECLAMATION);
        
            
            $reclamations->fill([
                'ETAT' => 'en cours',
                
            ]);
            $reclamations->save();
            }
             return redirect()->route('showaffecte')->with('message','Reclamation ajoutée');

        
    }

    public function showreclamation()
    {
        $reclamationAffectees = ReclamationAffectee::whereHas('agentOnee', function ($query) {
                $query->where('ID_A_ONEE', auth()->id());
            })
            ->with('reclamation', 'agentOnee')
            ->get();
    
        return view('reclamation_affectees', compact('reclamationAffectees'));
    }
    
        

     public function ajoutreclamatraitee(Request $request)
        {

           request()->validate([
                'ID_RECLAMATION' => 'required',
                'procedure'=>'required',
            ]);
            if (Auth::check()) {
             
            $reclamationAffectee = ReclamationAffectee::where('ID_REC_AFF', $request->ID_RECLAMATION)->first();

            
            

            
            $reclamation = Reclamations::find($request->ID_RECLAMATION);

            $reclamation->ETAT = 'traitée';

            $reclamation->save();

            
            $client = clients::where('NUM_CONTRAT', $reclamation->ID_CLI)->first();

            
            $categorie = categorie_reclamation::find($reclamation->ID_CAT);

            
            $service = services::find($reclamation->ID_SERV);

            
            $agentCentre = agent_centre::find($reclamation->ID_A_CENTRE);

            
            $agentName = $agentCentre->user->name;


            reclamationtraitee::create([
                'ID_RECLAMATION' => $request->ID_RECLAMATION,
                'CLIENT'=> $client->NOM_CLIENT,
                'AGENT_CENTRE'=>$agentName,
                'CATEGORIE_RECLAMATION'=> $categorie->NOM_CATEGORIE,
                'SERVICE_RESPONSABLE'=>$service->NOM_SERVICE,
                'DESCRIPTION'=>$reclamation->DESCRIPTION,
                'PROCEDURE'=>$request->procedure,
            ]);

            

             reclamationaffectee::where('ID_REC_AFF', $request->ID_RECLAMATION)->delete();

            
         
            }
             return redirect()->route('showreclamationtraitee')->with('message','la reclamation a ete ajoutee a votre liste de traitement');
        
    }

    public function showreclamationtraitee()
{
    $reclamations = ReclamationTraitee::paginate(6);

    return view('reclamationtraite', compact('reclamations'));
}

      public function showmesrendez()
    {
       $rendezvous = Event::with('agent', 'rendezvous')->paginate(6);
        return view('mesrendez', compact('rendezvous'));
    }

     public function searchaff(Request $request)
        {
            $ID_RECLAMATION = $request->ID_RECLAMATION;
        
            if (empty($ID_RECLAMATION)) {
                return redirect()->route('showaffecte');
            }
        
            $reclamationAffectees = reclamationaffectee::with('reclamation', 'agentOnee')->where('ID_RECLAMATION', $ID_RECLAMATION)->paginate(1);
        
            if ($reclamationAffectees->isEmpty()) {
                return redirect()->route('showaffecte')->with('error', 'La réclamation n a pas été trouvée');
            }
        
            return view('reclamation_affectees', compact('reclamationAffectees'));
        }

         public function searchtraitee(Request $request)
        {
            $ID = $request->ID;
        if (empty($ID)) {
            return redirect()->route('showreclamationtraitee');
        }

        $reclamations = reclamationtraitee::where('ID_RECLAMATION', $ID)->paginate(1);

        if ($reclamations->isEmpty()) {
            
            return redirect()->route('showreclamationtraitee')->with('error', 'la réclamation n a pas été trouvée');
        }
        
            return view('reclamationtraite', compact('reclamations'));
        }

        

          public function ajouterrendezvous(Request $request)
        {

           request()->validate([
                'ID_RENDEZ' => 'required',
                'ID_CLI'=>'required',
            ]);
            if (Auth::check()) {
            $task = new Event();
            $task->date_et_heure = $request->date_et_heure;
            $task->id_rendezvous=$request->ID_RENDEZ;
            $clientId = Auth::user()->id; 
            $task->id_agent = $clientId;
            $task->save();
            $client = clients::find($request->ID_CLI);
            $mail = $client->EMAIL; 
            $Name = Auth::user()->name;
            $date= $request->date_et_heure;

            try {
                Mail::to($mail)->send(new appointementEmail($Name, $date ));
            } catch (\Exception $e) {
                
                return redirect()->route('showmesrendez')->with('error', 'l email n a pas été envoyé , verifier votre connection et informer le client manuellement');
            }
             return redirect()->route('showmesrendez')->with('message','Rendez-vous ajoutée');
            
         

        
    }
}

public function destroy($id)
{
    $event = Event::findOrFail($id);
    $event->delete();

    return redirect()->route('showmesrendez')->with('message', 'Rendez-vous passé avec succès');
}

public function modify()
{
    
    $personne = User::join('infos', 'users.id', '=', 'infos.ID_USER')
            ->where('users.id', Auth::id())
            ->first();


    return view('editmonprofile',compact('personne'));
}

public function update(Request $request)
    {   $id=$request->id;
        $nom= $request->name;
        $mail=$request->email;
        $passwd=$request->password;
        $passwdh=Hash::make($passwd);
        

        $request->validate([
            'name' =>'required|min:3|max:40',
            'email' =>'required|email|min:3|max:40',
            'password'=>'required|min:9|max:40|confirmed',
        ]);

        $updatedUser  = User::find($id);

        

        $updatedUser->fill([
            'name' => $nom,
            'email' => $mail,
            'password' => $passwdh,
        ])->save();

        

        $updatedInfo = info::where('ID_USER',$id )->first();
        

        $updatedInfo->fill([
            'PWD' => $passwd, 
        ])->save();

        

        return redirect()->route('showrec')->with('message','informations modifiées');
    }


}
