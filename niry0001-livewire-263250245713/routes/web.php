<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Livewire;
// use App\Http\Livewire\CompanyData;


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

Route::get('/layout', function(){
    return view('layout');
});
