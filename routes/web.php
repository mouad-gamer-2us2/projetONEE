<?php

use App\Models\categorie_reclamation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneeController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FullCalendarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:agent ONEE'])->group(function () {
Route::delete('/events/{id}',  [OneeController::class, 'destroy'])->name('destroyrendez');  
route::post('/ajouterrendezvous', [OneeController::class, 'ajouterrendezvous'])->name('ajouterrendezvous');
route::get('/rendez', [CenterController::class, 'showrendez'])->name('showrendez');
route::get('/mesrendez', [OneeController::class, 'showmesrendez'])->name('showmesrendez');
route::get('/recla',[CenterController::class,'showreclamations'])->name('showrec');
route::get('/reclamationaffectee',[OneeController::class,'showreclamation'])->name('showaffecte');
route::post('/reclamationonee', [OneeController::class, 'ajoutreclama'])->name('ajoutreclama');
route::post('/reclamatraitee', [OneeController::class, 'ajoutreclamatraitee'])->name('ajoutreclamatraitee');
route::get('/reclamationtraitee',[OneeController::class,'showreclamationtraitee'])->name('showreclamationtraitee');
 route::post('/searchaff',[OneeController::class,'searchaff'])->name('searchaff');
  route::post('/searchtraitee',[OneeController::class,'searchtraitee'])->name('searchtraitee');
 
Route::get ('/dashboard', [ToDoController:: class, 'index'])->name('dashboard');

Route::post('/dashboard', [ToDoController:: class,'store']);

Route::get('/tasks/{id}/destroy', [ToDoController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks/{id}/edit', [ToDoController::class, 'edit'])->name('tasks.edit');

Route::get('full-calender', [FullCalendarController::class, 'index']);

Route::post('full-calender/action', [FullCalendarController::class, 'action']);

});




//routes accessible only by admin:
Route::middleware(['auth', 'role:Admin'])->group(function () {
    
    //--------------------------------------------------------------------------------------------------------------------------------

    route::get('/admindash1',[adminController::class,'showservices'])->name('showservices');

route::get('/admindash1/createSER',[adminController::class,'createSER'])->name('createSER');

    route::post('/admindash1/storeSER',[adminController::class,'storeSER'])->name('storeSER');

    route::delete('/admindash1/{ID_SERVICE}',[adminController::class,'destroySER'])->name('destroySER');

    route::get('/admindash1/{ID_SERVICE}/editSER',[adminController::class,'editSER'])->name('editSER');

route::put('/admindash1/{ID_SERVICE}',[adminController::class,'updateSER'])->name('updateSER');

    //--------------------------------------------------------------------------------------------------------------------------------

    route::get('/admindash2',[adminController::class,'showcategories'])->name('showcategories');

    route::get('/admindash2/createREC',[adminController::class,'createREC'])->name('createREC');

    route::post('/admindash2/storeREC',[adminController::class,'storeREC'])->name('storeREC');

    route::delete('/admindash2/{ID_CATEGORIE}',[adminController::class,'destroyREC'])->name('destroyREC');

    route::get('/admindash2/{ID_CATEGORIE}/editREC',[adminController::class,'editREC'])->name('editREC');

    route::put('/admindash2/{ID_CATEGORIE}',[adminController::class,'updateREC'])->name('updateREC');

    //-------------------------------------------------------------------------------------------------------------------------------

    route::put('/admindash3/editPER/{id}',[adminController::class,'updatePER'])->name('modifypersonne');

    route::get('/admindash3',[adminController::class,'showpersonnels'])->name('showpersonnels');

    route::get('/admindash3/createPER',[adminController::class,'createPER'])->name('createPER');

    route::post('/admindash3/storePER',[adminController::class,'storePER'])->name('storePER');

    route::delete('/admindash3/{id}',[adminController::class,'destroyPER'])->name('destroyPER');

    route::get('/admindash3/{id}/editPER',[adminController::class,'editPER'])->name('editPER');



    route::get('/admindash3/{id}/createAF',[adminController::class,'createAF'])->name('createAF');

    route::post('/admindash3/storeAF',[adminController::class,'storeAF'])->name('storeAF');

    route::get('/admindash3/{id}/editAF',[adminController::class,'editAF'])->name('editAF');

    route::put('/admindash3/{id}',[adminController::class,'updateAF'])->name('updateAF');

    route::get('/admindash3/searchPER',[adminController::class,'searchPER'])->name('searchPER');});

//--------------------------------------------------------------------------------------------------------

Route::middleware(['auth', 'role:agent Centre'])->group(function () {
    
    route::get('/clients',[CenterController::class,'showclients'])->name('showclients');

    route::get('/clients/createcl',[CenterController::class,'createcl'])->name('createcl');

    route::post('/clients/storecl',[CenterController::class,'storecl'])->name('storecl');
   
    route::delete('/clients/{NUM_CONTRAT}',[CenterController::class,'destroycl'])->name('destroycl');
  
    route::get('/clients/{NUM_CONTRAT}/editcl',[CenterController::class,'editcl'])->name('editcl');

    route::put('/clients/{NUM_CONTRAT}',[CenterController::class,'updatecl'])->name('updatecl');

    route::get('/clients/voirpluscl/{NUM_CONTRAT}',[CenterController::class,'voirpluscl'])->name('voirpluscl');

    route::get('/clients/storecl/choix/{NUM_CONTRAT}',[CenterController::class,'choix'])->name('choix');


    //-----------------------------------------------------------------------------------------------

    route::get('/reclamations',[CenterController::class,'showrecla'])->name('showrecla');

    route::post('/clients/createrecla/{NUM_CONTRAT}',[CenterController::class,'createrecla'])->name('createrecla');

    route::post('/clients/storerecla',[CenterController::class,'storerecla'])->name('storerecla');

    route::get('/historique',[CenterController::class,'showhistorique'])->name('showhistorique');

    route::delete('/reclamations/destrorecla/{ID_RECLAMATION}',[CenterController::class,'destroyrecla'])->name('destroyrecla');

    route::get('/reclamations/{ID_RECLAMATION}/editrecla',[CenterController::class,'editrecla'])->name('editrecla');

    route::put('/reclamations/updaterecla',[CenterController::class,'updaterecla'])->name('updaterecla');

    route::post('/reclamations/searchrecla',[CenterController::class,'searchrecla'])->name('searchrecla');

    route::post('/clients/searchcli',[CenterController::class,'searchcli'])->name('searchcli');

    

    //--------------------------------------Rendez-vous---------------------------------------------------------

    route::get('/rendezvous', [CenterController::class, 'showrendezvous'])->name('showrendezvous');

    route::post('/rendezvous/storerendezvous', [CenterController::class, 'storerendezvous'])->name('storerendezvous');

    route::get('/rendezvous/create/{NUM_CONTRAT}', [CenterController::class, 'createrendezvous'])->name('createrendezvous');

    route::get('/client/showrecla-rdv/{NUM_CONTRAT}', [CenterController::class, 'showrecla_rdv'])->name('showrecla_rdv');

    route::delete('/rendezvous/destrorendezvous/{ID_RENDEZ_VOUS}',[CenterController::class,'destroyrendezvous'])
    ->name('destroyrendezvous');

    route::get('/rendezvous/{ID_RENDEZ_VOUS}/editrendezvous',[CenterController::class,'editrendezvous'])
    ->name('editrendezvous');

    route::put('/rendezvous/updaterendezvous',[CenterController::class,'updaterendezvous'])
    ->name('updaterendezvous');
});


  //--------------------------------------Centre Onee---------------------------------------------------------


 
