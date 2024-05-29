<?php

namespace App\Http\Controllers;
use App\Models\agent_centre;
use App\Models\categorie_reclamation;
use App\Models\services;
use App\Models\User;
use App\Models\info;
use Illuminate\Http\Request;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\informationEmail;
use App\Mail\updateEmail;
use App\Models\agent_onee;
use App\Models\agentonee;
use Illuminate\Console\View\Components\Info as ComponentsInfo;
use Illuminate\Foundation\Auth\User as AuthUser;

class adminController extends Controller
{//---------------------------------------------------------------------------------------------------------------------------------------
    public function showservices()
    {
        $SERVICES=services::paginate(6);
        return view('admindash1',compact('SERVICES'));}


    public function searchSER(Request $request)
    {
        $NOM = $request->NOM_SERVICE;
        if (empty($NOM)) {
            return redirect()->route('showservices');
        }

        $SERVICES = services::where('NOM_SERVICE', $NOM)->paginate(1);

        if ($SERVICES->isEmpty()) {
            
            return redirect()->route('showservices')->with('error', 'le service n a pas été trouvé');
        }

        return view('admindash1', compact('SERVICES')); 
    }


    public function createSER()
    {return view('createSER');}   
    
    public function storeSER(Request $request)
    {
        
        
        //Validation :

        $request->validate([
            'NOM_SERVICE'=>'required|unique:SERVICES|min:3',
            'CATEGORIE_SERVICE'=>'required|min:3',
            'DESCRIPTION'=>'required',
            'APPARTENANCE'=>'required|min:3|max:40',
        ]);

        services::create($request->post()
        );

        return redirect()->route('showservices')->with('message','le service a été ajouté');
    }

    public function destroySER(Request $request, $ID_SERVICE)
    {
        
        $service = services::find($ID_SERVICE);
    
        
        if (!$service) {
            
            return redirect()->route('showservices')->with('error', 'service not found.');
        }
    
        
        $service->delete();
    
        
        return redirect()->route('showservices')->with('message','le service a été suprimé');
    }

    public function editSER(Request $request,$ID_SERVICE)
    {
        $service = services::find($ID_SERVICE);

        return view('editSER',compact('service'));
    }
    
    public function updateSER(Request $request)
    {
        $request->validate([
            'NOM_SERVICE'=>'required|min:3',
            'CATEGORIE_SERVICE'=>'required|min:3',
            'DESCRIPTION'=>'required',
            'APPARTENANCE'=>'required|min:3|max:40',
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
        return redirect()->route('showservices')->with('message','le service a été modifié');
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

        return redirect()->route('showcategories')->with('message','la categorie été ajoutée');
    }

    public function destroyREC(Request $request, $ID_CATEGORIE)
    {
        
        $category = categorie_reclamation::find($ID_CATEGORIE);
    
        
        if (!$category) {
            
            return redirect()->route('showcategories')->with('error', 'Category not found.');
        }
    
        
        $category->delete();
    
        
        return redirect()->route('showcategories')->with('message','la categorie été supprimée');
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
        return redirect()->route('showcategories')->with('message','la categorie été modifiée');
    }

//---------------------------------------------------------------------------------------------------------------------------


    public function showpersonnels()
    {
       // Retrieve users along with their associated info
         $personnels = User::with('info:ID_INFO,ID_USER,ROLE,PWD')->paginate(6);

        // Pass the data to the view
        return view('admindash3', compact('personnels'));}

    public function searchPER(Request $request)
    {
        $email = $request->email;
        if (empty($email)) {
            return redirect()->route('showpersonnels');
        }

        $personnels = User::with(['info' => function ($query) {
            $query->select('ID_INFO', 'ID_USER', 'ROLE', 'PWD');
        }])
        ->whereHas('info', function ($query) use ($email) {
            $query->where('email', $email);
        })
        ->paginate(1);

        if ($personnels->isEmpty()) {
            
            return redirect()->route('showpersonnels')->with('error', 'la personne n a pas été trouvée');
        }

        return view('admindash3', compact('personnels'));


    }

    public function createPER()
    {  
        return view('createPER');}
    
    public function storePER(Request $request)
    {
        $nom= $request->name;
        $mail=$request->email;
        $passwd=$request->password;
        $role=$request->ROLE;
        $passwdh=Hash::make($passwd);
        
        //Validation :

        $request->validate([
            'name' =>'required|unique:Users|min:3|max:40',
            'email' =>'required|unique:Users|email|min:3|max:40',
            'password'=>'required|min:9|max:40|confirmed',
            'ROLE'=>'required',

        ]);

        $newUser = User::create([
            'name' => $nom,
            'email' => $mail,
            'password' => $passwdh,
        ]);

        $userID = $newUser->id;

        info::create([
            'PWD' => $passwd, 
            'ROLE' => $role,
            'ID_USER' => $userID,
         ]);

         if($role =='agent Centre')
         {
            agent_centre::create([
                'ID_ACENTRE'=>$userID,
            ]);
         }

         try {
            Mail::to($mail)->send(new informationEmail($mail, $passwd));
        } catch (\Exception $e) {
            
            return redirect()->route('showpersonnels')->with('error', 'l email n a pas été envoyé , verifier votre connection et informer l agent manuellement');
        }
         return redirect()->route('showpersonnels')->with('message','l agent a été ajoutée');
    }

    public function destroyPER(Request $request, $id)
    {
        
        $personne = User::find($id);
    
        
        if (!$personne) {
            
            return redirect()->route('showpersonnels')->with('error', 'person not found.');
        }
    
        
        $personne->delete();
    
        
        return redirect()->route('showpersonnels')->with('message','l agent a été supprimée');
    }

    public function editPER(Request $request,$ID_USER)
    {
        
        $personne = User::join('infos', 'users.id', '=', 'infos.ID_USER')
                ->where('users.id', $ID_USER)
                ->first();


        return view('editPER',compact('personne'));
    }
    
    public function updatePER(Request $request)
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

        

        try {
            Mail::to($mail)->send(new updateEmail($mail, $passwd));
        } catch (\Exception $e) {
            
            return redirect()->route('showpersonnels')->with('error', 'l email n a pas été envoyé , verifier votre connection et informer l agent manuellement');
        }

        return redirect()->route('showpersonnels')->with('message','l agent a été modifiée');
    }


    public function createAF(Request $request,$id)
    {
        $affectation = services::all();
        
        return view('createAF',compact('affectation','id'));
    }

    public function storeAF(Request $request)
    {
        $ID_AONEE= $request->ID_AONEE;
        $ID_SER=$request->ID_SER;
        
        //Validation :

        $request->validate([
            'ID_SER' =>'required',
        ]);

        agentonee::create([
            'ID_AONEE'=>$ID_AONEE,
            'ID_SER'=>$ID_SER,
        ]);

        return redirect()->route('showpersonnels')->with('message','l\'agent a été affectée');
    }

    public function editAF(Request $request,$id)
    {
        $affectation = services::all();
        
        return view('editAF',compact('affectation','id'));
    }

    public function updateAF(Request $request)
    {
        $request->validate([
            'ID_SER' =>'required',
        ]);
        $ID_SER= $request->ID_SER;
        $ID_AONEE=$request->ID_AONEE;

        

        $affectation = agentonee::find($ID_AONEE);

        $affectation->fill([
            'ID_SER'=>$ID_SER,
        ])->save();
        return redirect()->route('showpersonnels')->with('message','l\'affectation a été modifiée');
    }




}


