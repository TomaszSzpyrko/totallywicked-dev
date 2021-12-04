<?php

//use CharacterController;
use Illuminate\Support\Facades\Route;
//use LocationController;
//use EpisodeController;

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
Route::get('/home', function () {
    return view('home');

});
//Route::resource('episode', EpisodeController::class);
//Route::resource('location', LocationController::class);
Route::get('/character', 'CharacterController@index');
Route::get('character/{id}', 'CharacterController@show');
