<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FullCalendarController;
use App\Models\categorie_reclamation;

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





Route::get ('/dashboard', [ToDoController:: class, 'index'])->name('dashboard');

Route::post('/dashboard', [ToDoController:: class,'store']);

Route::get('/tasks/{id}/destroy', [ToDoController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks/{id}/edit', [ToDoController::class, 'edit'])->name('tasks.edit');

Route::get('full-calender', [FullCalendarController::class, 'index']);

Route::post('full-calender/action', [FullCalendarController::class, 'action']);

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

route::get('/admindash3',[adminController::class,'showpersonnels'])->name('showpersonnels');

route::get('/admindash3/createPER',[adminController::class,'createPER'])->name('createPER');

route::post('/admindash3/storePER',[adminController::class,'storePER'])->name('storePER');

route::delete('/admindash3/{id}',[adminController::class,'destroyPER'])->name('destroyPER');

route::get('/admindash3/{id}/editREC',[adminController::class,'editPER'])->name('editPER');

route::put('/admindash3/{id}',[adminController::class,'updatePER'])->name('updatePER');