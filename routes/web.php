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
    return view('homePage');
})->name('home');

Route::get('/comics', function () {
    return view('comicsPage');
}) -> name('comics');


Route::get('/contact', function () {
    return view('contactsPage');
}) -> name('contatti');


Route::get('/about', function () {
    return view('aboutPage');
}) -> name('aboutMe');


Route::get('/privacyPolicy', function () {
    return view('privacyPage');
}) -> name('policy');

