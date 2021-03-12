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
    return view('welcome');
});

Route::get('/upcoming', function () {
    return view ('upcoming');
});

Route::get('/what-is-werewolf', function () {
    return view ('what_is_werewolf');
});

Route::get('/first-timer-notes', function () {
    return view ('first_timer_notes');
});