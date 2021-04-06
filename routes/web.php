<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\FormController as AdminFormController;
use App\Http\Controllers\Admin\Form2Controller as AdminForm2Controller;

Route::get('/', [NewsController::class, 'index'])
->name('home');

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
    Route::resource('/categories', AdminCategoryController::class);
         
    Route::resource('/news', AdminNewsController::class)
    ->names([
        'index' => 'news.index',
        'store' => 'news.store',
        'create' => 'news.create'
    ]); 
    Route::resource('/forms', AdminFormController::class);
    Route::resource('/form2', AdminForm2Controller::class);
    
});




   
