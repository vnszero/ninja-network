<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/ninjas', function() {
    $ninjas = [
        ["name" => "Mario", "skill" => 75, "id" => "1"],
        ["name" => "Luigi", "skill" => 45, "id" => "2"]
    ];

    return view('ninjas.index', ["greeting" => "hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function() {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function($id) {
    // fetch record with id
    return view('ninjas.show', ["id" => $id]);
});