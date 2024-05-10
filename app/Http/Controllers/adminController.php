<?php

namespace App\Http\Controllers;

use App\Models\categorie_reclamation;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

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

    public function destroyREC(Request $request, $ID_CATEGORIE)
    {
        // Retrieve the category model instance based on the ID
        $category = categorie_reclamation::find($ID_CATEGORIE);
    
        // Check if the category exists
        if (!$category) {
            // Handle the case where the category does not exist
            return redirect()->route('showcategories')->with('error', 'Category not found.');
        }
    
        // Delete the category
        $category->delete();
    
        // Redirect back to the categories page
        return redirect()->route('showcategories')->with('success', 'Category deleted successfully.');
    }
    
    



}
