<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', [NinjaController::class, 'index']);

Route::get('/ninjas/create', function() {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function($id) {
    // fetch record with id
    return view('ninjas.show', ["id" => $id]);
});