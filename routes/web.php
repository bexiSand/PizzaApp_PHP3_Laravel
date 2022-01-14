<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;

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


Route::get('/pizza', 'App\Http\Controllers\PizzaController@getPizzaView');
Route::post('/pizza', 'App\Http\Controllers\PizzaController@getPizzaView');
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@getPizzasView');

Route::post('/order', 'App\Http\Controllers\OrderController@store');
Route::get('/order', 'App\Http\Controllers\OrderController@store');

Route::get('/kitchen', 'App\Http\Controllers\KitchenController@getKitchenView');
Route::post('/kitchen', 'App\Http\Controllers\KitchenController@getKitchenView');