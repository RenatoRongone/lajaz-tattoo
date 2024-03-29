<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/presentazione', [ProjectController::class, 'artistpage'])->name('artistpage');
Route::get('/i-miei-lavori', [ProjectController::class, 'works'])->name('works');
Route::get('/invia-messaggio', [ProjectController::class, 'sendmessage'])->middleware('auth')->name('sendmessage');
Route::get('/progetto-nel-dettaglio/{project}', [ProjectController::class, 'showproject'])->name('showproject');
Route::redirect('/login/admin', '/admin/login')->middleware('is_admin')->name('loginAdmin');


