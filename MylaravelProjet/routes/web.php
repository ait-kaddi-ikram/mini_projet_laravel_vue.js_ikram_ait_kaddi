<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\suitController;
use App\Http\Controllers\PfeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/login',[UserController::class,'login']);
Route::post('/api/logout',[UserController::class,'logout']);
Route::post('/api/adminstore',[UserController::class,'store']);

Route::post('/api/adminshow',[AdminController::class,'show']);
Route::post('/api/adminstore',[AdminController::class,'store']);

Route::get('/api/profs',[ProfController::class,'index']);
Route::post('/api/profStore',[ProfController::class,'store']);
Route::get('/api/profs/{id}',[ProfController::class,'delete']);
Route::post('/api/profUpdate',[ProfController::class,'update']);
Route::post('/api/profUpdatInfo',[ProfController::class,'updatInfo']);
//Route::get('/api/moduleThisProf/{id}',[ProfController::class,'getModule']);
Route::get('/api/prof/{id}',[ProfController::class,'show']);

Route::get('/api/etudiants',[EtudiantController::class,'index']);
Route::post('/api/etudiantStore',[EtudiantController::class,'store']);
Route::get('/api/etudiantDelete/{id}',[EtudiantController::class,'delete']);
Route::post('/api/etudiantUpdate',[EtudiantController::class,'update']);
Route::get('/api/etudiants/{id}',[EtudiantController::class,'showList']);
Route::post('/api/etudiantUpdatInfo',[EtudiantController::class,'updatInfo']);
Route::get('/api/etudiant/{id}',[EtudiantController::class,'show']);


Route::get('/api/modules/{id}',[ModuleController::class,'showList']);
Route::post('/api/moduleStore',[ModuleController::class,'store']);
Route::get('/api/moduleDelete/{id}',[ModuleController::class,'delete']);
Route::post('/api/suitStore',[suitController::class,'store']);
Route::post('/api/suitUpdate',[suitController::class,'update']);
Route::get('/api/moduleThisProf/{id}',[ModuleController::class,'showListModule']);

Route::get('/api/moduleThisEtu/{id}',[ModuleController::class,'showListModuleEtu']);

Route::get('/api/suit/{id}/{idd}',[suitController::class,'show']);


Route::post('/api/pfeStore',[PfeController::class,'store']);