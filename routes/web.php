<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\SessionsContentController;


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

Route::get('/community', function () {
    $title = 'MSCC — Community';
    return view('community', compact('title'));
})->name('community');

Route::get('/agenda', function () {
    $title = 'MSCC — Agenda';
    return view('agenda', compact('title'));
})->name('agenda');

// Route::get('/speakers', function () {
//     $title = 'MSCC — Speakers';
//     return view('speakers', compact('title'));
// })->name('speakers');

Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers');


Route::get("/sessionsdata", [SessionsContentController::class, "index"]);