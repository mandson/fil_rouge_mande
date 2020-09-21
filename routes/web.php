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


  

Route::resource('/','pageMastercController');
Route::resource('p_accueil','pageAccueilcController');


Route::get('temps', function () {
    return view('users_views/temps');
});
Route::get('oeil', function () {
    return view('users_views/oeil');
});

Route::get('test', function () {
    return view('users_views/test');
});




/******************************DASHBOARD OPTION */
Route::get('Admino', function (){
    return view('admin.pages.index1');
});
// Route::get('universite', function (){
//     return view('admin.pages.universite');
// });

Route::resource('universite','UniversiteController');
Route::resource('actualite','ActualiteController');