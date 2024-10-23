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
    return view('pages.home');
})->name('home');

Route::get('/monsters', function () {
    $monsters = config('database.monsters');
    return view('pages.monsters', compact('monsters'));

})->name('famous-monsters');

Route::get('/monster/{index}', function(string $index){
    $monster = config('database.monsters')[$index];
    return view('pages.show',compact('monster'));
})->name('pages-show');

