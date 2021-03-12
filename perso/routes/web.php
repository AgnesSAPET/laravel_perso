<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DesignerController;

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

Route::get('/', [NavController::class, 'home']); // changer de page
Route::get('/list', [NavController::class, 'list']);
Route::get('/designers', [NavController::class, 'designers']);
Route::get('/character/{id}', [NavController::class, 'character']);
Route::get('/designer/{id}', [NavController::class, 'designer']);

Route::get('/add', [NavController::class, 'add']);
Route::get('/addPerso', [NavController::class, 'addPerso']);
Route::post('/addPerso', [CharacterController::class, 'addPerso']); // action dans un page
Route::get('/addDesigner', [NavController::class, 'addDesigner']);
Route::post('/addDesigner', [DesignerController::class, 'addDesigner']); // action dans un page

Route::post('/deleteCharacter', [CharacterController::class, 'delete']);
Route::post('/deleteDesigner', [DesignerController::class, 'delete']);

Route::get('/updateCharacter/{id}', [NavController::class, 'updateCharacter']);
Route::post('/updateCharacter', [CharacterController::class, 'updateCharacter']);
Route::get('/updateDesigner/{id}', [NavController::class, 'updateDesigner']);
Route::post('/updateDesigner', [DesignerController::class, 'updateDesigner']);
