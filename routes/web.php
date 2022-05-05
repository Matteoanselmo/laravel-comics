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

// Route::get('/', function () {
//     return view('layouts.base');
// }) -> name('home-page');

Route::get('/', function () {
    $comics = config('comics');
    $links = config('footer-list');
    return view('guest.homePage', ['comics' => $comics, 'links' => $links] );
}) -> name('home-page');

Route::get('/{id}', function ($id) {
    $comics = config('comics');
    $links = config('footer-list');
    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('guest.product', ['comics' => $comics[$id], 'links' => $links] );
    } else{
        abort(404);
    }
}) -> name('home-product');
