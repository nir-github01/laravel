<?php

use Illuminate\Support\Facades\Route;
use Resources\views\orderform;
//use Resources\views\livewire;
use App\Http\Livewire\Orderfulfillment;
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
 
// Route::get('order', UserlistController::class);

Route::get('/formsapp', function() {
    return view('form');
});

Route::get('val', Orderfulfillment::class);
