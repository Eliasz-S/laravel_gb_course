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

Route::get('hi/{name}', function (string $name) {
    return "Hello, {$name}";
});

Route::get('welcome/{username}', function (string $username) { // Страница приветствия
    return "Welcome, {$username}";
});

Route::get('about', function () { // Страница с информацией о проекте
    return "About us";
});

Route::get('news', function () { // Страница со всеми новостями
    return "All news for today";
});

Route::get('news/{id}', function (int $id) { // Страница с конкретной новостью
    return "News no. {$id}";
});
