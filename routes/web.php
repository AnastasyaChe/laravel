<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news/show/{id}', [NewsController::class, 'show'])
->where('id', '\d+')
->name('news.show');

Route::get('/news', [NewsController::class, 'index'])
->name('news'); //это главная страница со всеми новостями

Route::get('/categories', [CategoryController::class, 'index'])
->name('categories'); //это главная страница со всеми категориями

Route::get('/categories/show/{id}', [CategoryController::class, 'show'])
->name('category.show');

Route::group(['prefix' => '/admin', 'as' => 'admin.'], 
    function() {
    Route::resource('/categories', AdminCategoryController::class); // это стр со списком категорий новостей
    Route::resource('/news', AdminNewsController::class)
    ->names([
        'index' => 'news.index',
        'store' => 'news.store',
        'create' => 'news.create'
    ]); // это стр списка новостей в админке
});


   
