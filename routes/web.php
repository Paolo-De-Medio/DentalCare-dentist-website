<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PublicController::class,'home'])->name('homepage');

Route::get('/ChiSiamo',[PublicController::class,'staff'])->name('chiSiamo');

Route::get('/servizi',[PublicController::class,'trattamenti'])->name('servizi');

Route::get('/contatti',[PublicController::class,'form'])->name('contatti');

Route::get('/servizi/dettalio/{title}',[PublicController::class, 'dettagli'])->name('servizi.dettaglio');
