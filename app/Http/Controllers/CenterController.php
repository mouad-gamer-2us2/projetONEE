<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
use App\Models\categorie_reclamation;
use App\Models\agent_centre;
use App\Models\reclamations;
use App\Models\services;
use Illuminate\Support\Facades\Auth;

class CenterController extends Controller
{//-------------------------------------------------------------------------------
    public function showclients()
    {
        $clients=clients::paginate(6);
        return view('clients',compact('clients'));}

        public function createcl()
        {return view('createcl');}   
        
        public function storecl(Request $request)
        {
            
            
            //Validation :
    
            $request->validate([
                'NUM_CONTRAT'=>'required|unique:clients|min:3',
                'NOM_CLIENT'=>'required|min:3',
                'CIN'=>'required',
                'ADRESSE'=>'required',
                'TEL'=>'required|min:10|max:10',
                'EMAIL'=>'required',
            ]);
    
            clients::create($request->post()
            );
    
            return redirect()->route('showclients')->with('message','le client a été ajouté');
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

        public function voirpluscl(Request $request)
        {

            $NUM_CONTRAT=$request->NUM_CONTRAT;
            $client = clients::find($NUM_CONTRAT);
            return view('voirpluscl', compact('client'));
        }

//------------------------------Partie Réclamation---------------------------

    public function showrecla()
    {
    $reclamation = reclamations::with(['clients:NUM_CONTRAT,NOM_CLIENT', 'services:ID_SERVICE,NOM_SERVICE',
    'categorie_reclamation:ID_CATEGORIE,NOM_CATEGORIE'])->paginate(6);
    return view('reclamations',compact('reclamation'));}

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
    
            reclamations::create([
                'DESCRIPTION'=> $request->description,
                'URGENCE'=> $request->urgence,
                'ETAT'=> $request->etat,
                'ID_CLI'=> $request->id_cli,
                'ID_CAT' => $request->id_cat,
                'ID_A_CENTRE' => $request->id_A_centre,
                'ID_SERV'=> $request->id_serv
            ]
            );
             
            
            return redirect()->route('showrecla')->with('message','la réclamation a été ajoutée');
        }
}
