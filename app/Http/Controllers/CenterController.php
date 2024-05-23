<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\clients;
use App\Models\services;
use App\Models\agentonee;
use App\Models\agent_centre;
use App\Models\reclamations;
use Illuminate\Http\Request;
use App\Models\demande_rendez_vous;
use Illuminate\Support\Facades\Auth;
use App\Models\categorie_reclamation;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CenterController extends Controller
{//-------------------------------------------------------------------------------
    public function showclients()
    {
        $clients = clients::orderBy('created_at', 'desc')->paginate(5);
        return view('clients', compact('clients'));
    }
        public function createcl()
        {return view('createcl');}   
        
        public function storecl(Request $request)
        {
            // Validation :
            $request->validate([
                'NUM_CONTRAT'=>'required|unique:clients|min:3',
                'NOM_CLIENT'=>'required|min:3',
                'CIN'=>'required',
                'ADRESSE'=>'required',
                'TEL'=>'required|min:10|max:10',
                'EMAIL'=>'required',
            ]);
        
            clients::create($request->post());
        
            $NUM_CONTRAT = $request->NUM_CONTRAT;
        
            return redirect()->route('choix', ['NUM_CONTRAT' => $NUM_CONTRAT])->with('message', 'le client a été ajouté');
        }
        
        public function choix(Request $request)
        {
            $NUM_CONTRAT = $request->NUM_CONTRAT;
            
            
            return view('choix', compact('NUM_CONTRAT'));
        }

        public function destroycl(Request $request, $NUM_CONTRAT)
        {
            
            $clients = clients::find($NUM_CONTRAT);
        
            
            if (!$clients) {
                
                return redirect()->route('showclients')->with('error', 'client not found.');
            }
        
            
            $clients->delete();
        
            
            return redirect()->route('showclients')->with('message','le client a été suprimé');
        }

        public function editcl(Request $request,$NUM_CONTRAT)
        {
            $clients = clients::find($NUM_CONTRAT);

            return view('editcl',compact('clients'));}


        public function updatecl(Request $request)
        {
            $request->validate([
                'NUM_CONTRAT'=>'required|unique:clients|min:3',
                'NOM_CLIENT'=>'required|min:3',
                'CIN'=>'required',
                'ADRESSE'=>'required',
                'TEL'=>'required|:10|max:10',
                'EMAIL'=>'required',
            ]);
            $newNUM_CONTRAT=$request->NUM_CONTRAT;
            $newNOM_CLIENT=$request->NOM_CLIENT;
            $newCIN=$request->CIN;
            $newADRESSE=$request->ADRESSE;
            $newTEL=$request->TEL;
            $newEMAIL=$request->EMAIL;

            $clients = clients::find($newNUM_CONTRAT);
    
            $clients->fill([
                'NOM_CLIENT'=>$newNOM_CLIENT,
                'CIN'=>$newCIN,
                'ADRESSE'=>$newADRESSE,
                'TEL'=>$newTEL,
                'EMAIL'=>$newEMAIL,
            ])->save();
            return redirect()->route('showclients')->with('message','le client a été modifié');
        }

        public function showhistorique()
        {
            return view('historique');
        }

        public function voirpluscl(Request $request)
        {

            $NUM_CONTRAT=$request->NUM_CONTRAT;
            $client = clients::find($NUM_CONTRAT);
            return view('voirpluscl', compact('client'));
        }

//------------------------------Partie Réclamation---------------------------

public function showrecla()
{
    $reclamations = reclamations::with([
        'client:NUM_CONTRAT,NOM_CLIENT', 
        'service:ID_SERVICE,NOM_SERVICE',
        'categorie_reclamation:ID_CATEGORIE,NOM_CATEGORIE',
        'agent_centre.user:id,name' 
    ]) ->orderBy('created_at', 'desc')->paginate(5);

    return view('reclamations', compact('reclamations'));
}

public function showreclamations()
{
    
   $user = Auth::id(); 
    $agentonee=agentonee::findOrFail($user);
    $idService = $agentonee->ID_SER;
    $reclamations = reclamations::with([
        'client:NUM_CONTRAT,NOM_CLIENT', 
        'service:ID_SERVICE,NOM_SERVICE',
        'categorie_reclamation:ID_CATEGORIE,NOM_CATEGORIE',
        'agent_centre.user:id,name' 
    ])
    ->where('ETAT', 'pas encore traitée')
    ->where('ID_SERV', $idService) 
    ->paginate(5);

    return view('recla', compact('reclamations'));
}


        public function createrecla(Request $request){

            $NUM_CONTRAT=$request->NUM_CONTRAT;
            $categories = categorie_reclamation::all();
            $user=Auth::user();
            $id=$user->id;
            $services = services::all();
            return view('createrecla', compact('categories', 'id','services','NUM_CONTRAT'));}   
        
        public function storerecla(Request $request)
        {
            //Validation :
    
            $request->validate([
                'id_cli' => 'required',
                'id_cat' => 'required',
                'id_A_centre' => 'required',
                'id_serv' => 'required',
                'description' => 'required',
                'urgence' => 'required',
                'etat' => 'required'
            ]);
    
            $reclamation=reclamations::create([
                'DESCRIPTION'=> $request->description,
                'URGENCE'=> $request->urgence,
                'ETAT'=> $request->etat,
                'ID_CLI'=> $request->id_cli,
                'ID_CAT' => $request->id_cat,
                'ID_A_CENTRE' => $request->id_A_centre,
                'ID_SERV'=> $request->id_serv
            ]
            );

            $newReclamationId = $reclamation->ID_RECLAMATION;
             
            
            return redirect()->route('showclients')->with('new','la réclamation a été ajoutée avec le numero :' . $newReclamationId);
        }

        public function destroyrecla(Request $request, $ID_RECLAMATION)
    {
        
        $reclamations = reclamations::find($ID_RECLAMATION);
    
        
        if (!$reclamations) {
            
            return redirect()->route('showrecla')->with('error', 'reclamation not found.');
        }
    
        
        $reclamations->delete();
    
        
        return redirect()->route('showrecla')->with('message','la reclamation a été suprimée');
    }

    public function editrecla(Request $request,$ID_RECLAMATION)
    {
        $reclamations = reclamations::with([
            'client:NUM_CONTRAT,NOM_CLIENT', 
            'service:ID_SERVICE,NOM_SERVICE',
            'categorie_reclamation:ID_CATEGORIE,NOM_CATEGORIE',
            'agent_centre.user:id,name' 
        ])->find($ID_RECLAMATION);

        $categories = categorie_reclamation::all();
        $services=services::all();


        return view('editrecla',compact('reclamations','categories','services','ID_RECLAMATION'));}

        public function updaterecla(Request $request)
        {
            //Validation :
    
            $request->validate([
                'id_cli' => 'required',
                'id_cat' => 'required',
                'id_A_centre' => 'required',
                'id_serv' => 'required',
                'description' => 'required',
                'urgence' => 'required',
                'etat' => 'required'
            ]);
    
            $reclamation = reclamations::findOrFail($request->ID_RECLAMATION);

            $reclamation->fill([
                'DESCRIPTION' => $request->description,
                'URGENCE' => $request->urgence,
                'ETAT' => $request->etat,
                'ID_CLI' => $request->id_cli,
                'ID_CAT' => $request->id_cat,
                'ID_A_CENTRE' => $request->id_A_centre,
                'ID_SERV' => $request->id_serv 
            ]);

            $reclamation->save();

             
            
            return redirect()->route('showrecla')->with('message','la réclamation a été modifiée');
        }

       
        public function searchrecla(Request $request)
        {
            $ID_RECLAMATION = $request->ID_RECLAMATION;
        
            if (empty($ID_RECLAMATION)) {
                return redirect()->route('showrecla');
            }
        
            $reclamations = reclamations::with([
                'client:NUM_CONTRAT,NOM_CLIENT', 
                'service:ID_SERVICE,NOM_SERVICE',
                'categorie_reclamation:ID_CATEGORIE,NOM_CATEGORIE',
                'agent_centre.user:id,name' 
            ])->where('ID_RECLAMATION', $ID_RECLAMATION)->paginate(1);
        
            if ($reclamations->isEmpty()) {
                return redirect()->route('showrecla')->with('error', 'La réclamation n a pas été trouvée');
            }
        
            return view('reclamations', compact('reclamations'));
        }

        public function searchcli(Request $request)
        {
            $NUM_CONTRAT = $request->NUM_CONTRAT;
        
            if (empty($NUM_CONTRAT)) {
                return redirect()->route('showclients');
            }
        
            $clients = clients::where('NUM_CONTRAT', $NUM_CONTRAT)->paginate(1);
        
            if ($clients->isEmpty()) {
                return redirect()->route('showclients')->with('error', 'Le client n a pas été trouvé');
            }
        
            return view('clients', compact('clients'));
        }
        
    //---------------------------Partie Rendezvous--------------------------------------------

    public function showrendezvous()
    {
        $rendezvous = demande_rendez_vous::with([
            'client:NUM_CONTRAT,NOM_CLIENT', 
            'service:ID_SERVICE,NOM_SERVICE',
            'agent_centre.user:id,name' 
        ])
        ->orderByDesc('created_at')
        ->paginate(5);
    
        return view('rendezvous', compact('rendezvous'));
    }

    public function showrendez()
{
    $user = Auth::id();
    $agentonee = agentonee::findOrFail($user);
    $idService = $agentonee->ID_SER;

    // Récupérer les ID des rendez-vous associés à l'agent mais qui ne se trouvent pas dans la table events
    $rendezvous = demande_rendez_vous::where('ID_SER', $idService)
        ->whereNotIn('ID_RENDEZ_VOUS', function($query) {
            $query->select('id_rendezvous')
                  ->from('events');
        })
        ->with(['client:NUM_CONTRAT,NOM_CLIENT', 'service:ID_SERVICE,NOM_SERVICE', 'agent_centre.user:id,name'])
        ->paginate(5);

    return view('rendez', compact('rendezvous'));
}

    public function createrendezvous(Request $request){

        $NUM_CONTRAT=$request->NUM_CONTRAT;
        $user=Auth::user();
        $id=$user->id;
        $services = services::all();
        return view('createrendezvous', compact( 'id','services','NUM_CONTRAT'));
    }   
    
    public function storerendezvous(Request $request)
    {
        
        demande_rendez_vous::create([
            'INFORMATION_RENDEZ_VOUS' => $request->info_rendezvous,
            'ID_A_CENTRE' => $request->id_A_centre,
            'ID_SER' => $request->id_serv,
            'ID_CLI' => $request->id_cli
        ]);
    
        // Redirect back with a success message
        return redirect()->route('showclients')->with('message', 'Le rendez-vous a été ajouté');
    }
    
    
        public function destroyrendezvous(Request $request, $ID_RENDEZ_VOUS)
        {
            
            $rendezvous = demande_rendez_vous::find($ID_RENDEZ_VOUS);

            
            if (!$rendezvous) {
                
                return redirect()->route('showrendezvous')->with('error', 'rendez-vous not found.');
            }

            
            $rendezvous->delete();

            
            return redirect()->route('showrendezvous')->with('message','le rendez-vous a été suprimé');
        }


        public function editrendezvous(Request $request)
    {
        $ID_RENDEZ_VOUS=$request->ID_RENDEZ_VOUS;
        
        $rendezvous = demande_rendez_vous::with([
            'client:NUM_CONTRAT,NOM_CLIENT', 
            'service:ID_SERVICE,NOM_SERVICE',
            'agent_centre.user:id,name' 
        ])->find($ID_RENDEZ_VOUS);
            
        $services=services::all();
        $user=Auth::user();
        $id=$user->id;

            
        return view('editrendezvous',compact('rendezvous','services','ID_RENDEZ_VOUS','id'));}
       
        public function updaterendezvous(Request $request)
        {
            // Validation
            $request->validate([
                'info_rendez_vous' => 'required',
                'id_cli' => 'required',
                'id_A_centre' => 'required',
                'id_serv' => 'required', 
            ]);
        
           
            $rendezvous = demande_rendez_vous::findOrFail($request->id_rendez_vous);
        
            
            $rendezvous->fill([
                'INFORMATION_RENDEZ_VOUS' => $request->info_rendez_vous,
                'ID_A_CENTRE' => $request->id_A_centre,
                'ID_SER' => $request->id_serv, 
                'ID_CLI' => $request->id_cli,
            ]);
        
            // Save changes
            $rendezvous->save();
        
            
            return redirect()->route('showrendezvous')->with('message', 'Le rendez-vous a été modifié avec succès');
        }
        
        public function showrecla_rdv(Request $request)
        {
            $NUM_CONTRAT = $request->NUM_CONTRAT;
        
            $NOM_CLIENT = clients::where('NUM_CONTRAT', $NUM_CONTRAT)->value('NOM_CLIENT');

        
            
            $reclamations = reclamations::with([
                'client:NUM_CONTRAT,NOM_CLIENT',
                'service:ID_SERVICE,NOM_SERVICE',
                'agent_centre.user:id,name'
            ])->where('ID_CLI', $NUM_CONTRAT)->paginate(3);
        
           
            $rendezvous = demande_rendez_vous::with([
                'client:NUM_CONTRAT,NOM_CLIENT',
                'service:ID_SERVICE,NOM_SERVICE',
                'agent_centre.user:id,name'
            ])->where('ID_CLI', $NUM_CONTRAT)->paginate(3);
                
            
            return view('showrecla-rdv', compact('reclamations', 'rendezvous','NOM_CLIENT','NUM_CONTRAT'));
        }

        


        
        
        
        
}