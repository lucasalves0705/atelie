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
    return view('/pages/index');
})->name('index');

Route::get('/produto', function () {
    return view('pages.product');
})->name('product.index');

Route::get('/compras', function () {
    return view('pages.shop');
})->name('shop.index');

Route::get('/contato', function () {
    return view('pages.contact');
})->name('contact.index');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog.index');
