<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//prefisso perchè pages è dentro la cartella Admin in controller
Route::prefix('admin')
->name('admin.')
->namespace('Admin') // si riferisce al nome della cartella dei controllers
->middleware('auth') // controlla se siamo loggati
->group(function () {
       Route::resource('pages', 'PageController');
});
