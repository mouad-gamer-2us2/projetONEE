<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\reclamations;
use Illuminate\Http\Request;
use App\Models\reclamationtraitee;
use App\Models\reclamationaffectee;
use Illuminate\Support\Facades\Auth;

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
        $reclamationAffectees = reclamationaffectee::with('reclamation', 'agentOnee')
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
            $task = new reclamationtraitee();
            $task->ID_REC_AFF  = $request->ID_RECLAMATION;
            $task->Procedure  = $request->procedure;
            $clientId = Auth::user()->id; 
            $task->ID_A_ONEE = $clientId;
            $task->save();
            $reclamations =reclamations::findOrFail($request->ID_RECLAMATION);
        
            
            $reclamations->fill([
                'ETAT' => 'traite',
                
            ]);
            $reclamations->save();

             $recla =reclamationaffectee::where('ID_REC_AFF', $request->ID_REC_AFF)->delete();

            
         
            }
             return redirect()->route('showreclamationtraitee')->with('message','Reclamation ajoutée');

        
    }

       public function showreclamationtraitee()
    {
        $reclamationAffectees = reclamationtraitee::with('reclamation', 'agentOnee')->get();

        return view('reclamationtraite', compact('reclamationAffectees'));
    }
      public function showmesrendez()
    {
       $rendezvous = Event::with('agent', 'rendezvous')->get();
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
            $ID_RECLAMATION = $request->ID_RECLAMATION;
        
            if (empty($ID_RECLAMATION)) {
                return redirect()->route('showtraitee');
            }
        
            $reclamationAffectees = reclamationtraitee::with('reclamation', 'agentOnee')->where('ID_RECLAMATION', $ID_RECLAMATION)->paginate(1);
        
            if ($reclamationAffectees->isEmpty()) {
                return redirect()->route('showtraitee')->with('error', 'La réclamation n a pas été trouvée');
            }
        
            return view('reclamationtraite', compact('reclamationAffectees'));
        }

        

          public function ajouterrendezvous(Request $request)
        {

           request()->validate([
                'ID_RENDEZ' => 'required',
            ]);
            if (Auth::check()) {
            $task = new Event();
            $task->date_et_heure = $request->date_et_heure;
            $task->id_rendezvous=$request->ID_RENDEZ;
            $clientId = Auth::user()->id; 
            $task->id_agent = $clientId;
            $task->save();
            
             return redirect()->route('showmesrendez')->with('message','Rendez-vous ajoutée');

        
    }
}

public function destroy($id)
{
    $event = Event::findOrFail($id);
    $event->delete();

    return redirect()->route('showmesrendez')->with('message', 'Rendez-vous passé avec succès');
}

}
