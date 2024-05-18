<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

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

        public function showhistorique()
        {
            return view('historique');
        }
}
