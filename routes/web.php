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
    $title = 'MSCC — Developers Conference 2023';
    return view('home', compact('title'));
})->name('home');

Route::get('/code-of-conduct', function () {
    $title = 'MSCC — Code of Conduct';
    return view('conduct', compact('title'));
})->name('code-of-conduct');
