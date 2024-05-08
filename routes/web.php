<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
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





Route::get ('/dashboard', [ToDoController:: class, 'index'])->name('dashboard');

Route::post('/dashboard', [ToDoController:: class,'store']);

Route::get('/tasks/{id}/destroy', [ToDoController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks/{id}/edit', [ToDoController::class, 'edit'])->name('tasks.edit');

Route::get('full-calender', [FullCalendarController::class, 'index']);

Route::post('full-calender/action', [FullCalendarController::class, 'action']);

route::get('/admindash',[adminController::class,'showAdmin'])->name('showadmin');