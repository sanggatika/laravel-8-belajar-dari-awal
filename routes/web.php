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
    // menampilkan view "resources - views"
    // . = folder
    return view('welcome');
});

// Route 1
// Route::get('/home'. fn () => view('home')); || PHP 7.4

// Route 2
// $appName = "Laravel 8 - Belajar Dari Awal";
// Route::view('/home', 'home', ['appName' => $appName]); // || Laravel 8

// Route 3
Route::get('/home', function () {
    $appName = "Laravel 8 - Belajar Dari Awal";
    return view('home',[
        'appName' => $appName,
    ]);
});
