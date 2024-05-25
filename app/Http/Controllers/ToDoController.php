<?php

namespace App\Http\Controllers;

use App\Models\TODO;
use App\Models\agentonee;
use App\Models\Reclamation;
use App\Models\reclamations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
   public function index (){
    $user = Auth::user(); 
     $todos = TODO::select('todo.*')
            ->where('todo.client_id', $user->id)
            ->get();
     $user = Auth::id(); 
    $agentonee=agentonee::findOrFail($user);
    $idService = $agentonee->ID_SER;
    $reclamation = reclamations::
    where('ETAT', 'pas encore traitée')
    ->where('ID_SERV', $idService) ;

    $reclamations = reclamations::select('urgence', DB::raw('count(*) as total'))
     ->where('ID_SERV', $idService) 
        ->groupBy('urgence')
        ->pluck('total', 'urgence')
        ->toArray();
    $reclamationetat = reclamations::select('etat', DB::raw('count(*) as total'))
     ->where('ID_SERV', $idService) 
        ->groupBy('etat')
        ->pluck('total', 'etat')
        ->toArray();
    
    return view( "dashboard",['todos' => $todos, 'reclamations' => $reclamations,'reclamationetat' => $reclamationetat,'reclamation' => $reclamation]);
   }



     public function store(Request $request) {
        request()->validate([
            'title' => 'required',
        ]);
        if (Auth::check()) {
        $task = new TODO();
        $task->title = $request->title;
        
        $clientId = Auth::user()->id; 
        $task->client_id = $clientId;
       
        $task->save();
        return redirect('/dashboard');
        }

        
    }

   public function destroy($id)
    {
        $task = TODO::findOrFail($id);
        $task->delete();

         return redirect()->back();
    }
     public function edit(Request $request, $id)
    {
        $task = TODO::findOrFail($id);
        $task->isDone =true;


        $task->save();

        return redirect('/dashboard');
    }
}
