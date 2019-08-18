<?php
use App\Http\Controllers\InvestmentController;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::patch('datos/{user}', 'DatosController@update');
Route::get('/datos/{user}/edit', 'datosController@edit');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services', 'ServicesController@index');
Route::post('/services', 'ServicesController@store');

Route::get('/inversiones', 'InvestmentController@index');
Route::post('/sendInvestment' , 'InvestmentController@sendInvestment');

 Route::get('/balance', 'BalanceController@index');
