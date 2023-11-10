<?php

use App\Http\Controllers\HomePage;
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
    return view('home');
})->name('home');
Route::get('/artificial', [HomePage::class, 'artificial'])->name('artificial');
Route::get('/facial', [HomePage::class, 'facial'])->name('facial');
Route::get('/special', [HomePage::class, 'special'])->name('special');