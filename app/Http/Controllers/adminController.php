<?php

namespace App\Http\Controllers;

use App\Models\categorie_reclamation;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showservices()
    {return view('admindash1');}

    public function showcategories()
    {
        $CAT_REC=categorie_reclamation::paginate(6);
        
        return view('admindash2',compact('CAT_REC'));}

    public function showpersonnels()
    {return view('admindash3');}

    public function createREC()
    {return view('createREC');}

    public function storeREC(Request $request)
    {
        //$categorie= $request->NOM_CATEGORIE;

        //Validation :

        $request->validate([
            'NOM_CATEGORIE' =>'required|unique:categorie_reclamations|min:3|max:40',
        ]);

        categorie_reclamation::create($request->post()
        );

        return redirect()->route('showcategories');
    }

    public function destroyREC(categorie_reclamation $cat)
    {$cat->delete();
    return to_route('showcategories')->with('success','la categorie a ete supprimer');}


}
