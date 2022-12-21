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

    $strikers = ['Vlahovic', 'Chiesa', 'Milik', 'Di Maria', 'Kean'];

    return view('home', compact('strikers'));
});

Route::get('/scheda', function () {

    return view('scheda');
});
