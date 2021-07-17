<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/', function () {
//     return response()->json([
//         'title' => 'Example4661',
//         'status' => false,
//         'description' => 'ExampleDescription'
//     ]);
// });

//main page
Route::get('/', [MainController::class, 'index'])
    ->name('main');

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::view('/', 'admin.index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});

Route::get('/admin/categories/{id}/news', [AdminCategoryController::class, 'filter'])
    ->name('admin.categories.filter');


//user
Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{news}', [NewsController::class, 'show'])
    ->where('news', '\d+')
    ->name('news.show');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/categories/{id}', [CategoryController::class, 'filter'])
    ->where('id', '\d+')
    ->name('categories.filter');

Route::resource('feedback', FeedbackController::class);
Route::get('/review', [FeedbackController::class, 'index'])
    ->name('review');
Route::view('/feedback', 'feedback.create')
    ->name('feedback');

