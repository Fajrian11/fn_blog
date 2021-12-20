<?php

use App\Http\Controllers\PostController;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fajrian_Antetokounmpo",
        "email" => "nugraha.fajrian@gmail.com",
        "image" => "fotofajrian.jpg"
    ]);
});

//memakai controller

Route::get('/blog', [PostController::class, 'index']);

Route::get('blog/{id}', [PostController::class, 'show']);
