<?php

namespace App\Http\Controllers;

use App\Models\categorie_reclamation;
use App\Models\services;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class adminController extends Controller
{//---------------------------------------------------------------------------------------------------------------------------------------
    public function showservices()
    {
        $SERVICES=services::paginate(6);
        return view('admindash1',compact('SERVICES'));}

    public function createSER()
    {return view('createSER');}   
    
    public function storeSER(Request $request)
    {
        
        
        //Validation :

        $request->validate([
            'NOM_SERVICE'=>'required|unique:SERVICES|min:3|max:10',
            'CATEGORIE_SERVICE'=>'required|min:3|max:10',
            'DESCRIPTION'=>'required',
            'APPARTENANCE'=>'required|min:3|max:10',
        ]);

        services::create($request->post()
        );

        return redirect()->route('showservices');
    }

    public function destroySER(Request $request, $ID_SERVICE)
    {
        
        $service = services::find($ID_SERVICE);
    
        
        if (!$service) {
            
            return redirect()->route('showservices')->with('error', 'service not found.');
        }
    
        
        $service->delete();
    
        
        return redirect()->route('showservices')->with('success', 'Category deleted successfully.');
    }

    public function editSER(Request $request,$ID_SERVICE)
    {
        $service = services::find($ID_SERVICE);

        return view('editSER',compact('service'));
    }
    
    public function updateSER(Request $request)
    {
        $request->validate([
            'NOM_SERVICE'=>'required|min:3|max:10',
            'CATEGORIE_SERVICE'=>'required|min:3|max:10',
            'DESCRIPTION'=>'required',
            'APPARTENANCE'=>'required|min:3|max:10',
        ]);
        $id= $request->ID_SERVICE;
        $newNOM=$request->NOM_SERVICE;
        $newCAT=$request->CATEGORIE_SERVICE;
        $newDES=$request->DESCRIPTION;
        $newAPP=$request->APPARTENANCE;
        $service = services::find($id);

        $service->fill([
            'NOM_SERVICE'=>$newNOM,
            'CATEGORIE_SERVICE'=>$newCAT,
            'DESCRIPTION'=>$newDES,
            'APPARTENANCE'=>$newAPP,
        ])->save();
        return redirect()->route('showservices')->with('success', 'service updated successfully.');
    }



//---------------------------------------------------------------------------------------------------------------------------------------
    public function showcategories()
    {
        $CAT_REC=categorie_reclamation::paginate(6);
        
        return view('admindash2',compact('CAT_REC'));}

    

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
        
        $category = categorie_reclamation::find($ID_CATEGORIE);
    
        
        if (!$category) {
            
            return redirect()->route('showcategories')->with('error', 'Category not found.');
        }
    
        
        $category->delete();
    
        
        return redirect()->route('showcategories')->with('success', 'Category deleted successfully.');
    }
    
    public function editREC(Request $request,$ID_CATEGORIE)
    {
        $categorie = categorie_reclamation::find($ID_CATEGORIE);

        return view('editREC',compact('categorie'));
    }
    
    public function updateREC(Request $request)
    {
        $request->validate([
            'NOM_CATEGORIE' =>'required|unique:categorie_reclamations|min:3|max:40',
        ]);
        $id= $request->ID_CATEGORIE;
        $new=$request->NOM_CATEGORIE;

        

        $category = categorie_reclamation::find($id);

        $category->fill([
            'NOM_CATEGORIE'=>$new,
        ])->save();
        return redirect()->route('showcategories')->with('success', 'Category updated successfully.');
    }

//---------------------------------------------------------------------------------------------------------------------------

    public function showpersonnels()
    {return view('admindash3');}

}
