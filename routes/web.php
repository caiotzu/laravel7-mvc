<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Ggt -> Retornar um dado
// post -> salvar um dado
// put -> atualizar dado
// delete -> deletar um dados

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// EXEMPLOS DE DEIXAR APENAS ESSES TIPOS DE ROTAS / OU EXPLUIR ELAS
/*
    Route::resource('areas', 'AreaController')->only('index', 'edit', 'destroy', 'update', 'store');
    Route::resource('areas', 'AreaController')->except('show');
*/


Route::resource('/areas', 'AreaController')->except('show');
Route::resource('/studies', 'StudyController')->except('show');

