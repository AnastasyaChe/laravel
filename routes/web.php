<?php

use App\Http\Controllers\Account\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\FormController as AdminFormController;
use App\Http\Controllers\Admin\Form2Controller as AdminForm2Controller;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Auth;

Route::get('/news', [NewsController::class, 'index'])
->name('news');


//for guest
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('/', function () {
    return view('welcome2');
});

//for all
Route::get('/news', [NewsController::class, 'index'])
->name('news'); //это главная страница со всеми новостями

Route::get('/news/show/{id}', [NewsController::class, 'show'])
->where('id', '\d+')
->name('news.show'); 

Route::get('/categories', [CategoryController::class, 'index'])
->name('categories');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])
->name('categories.show'); //это главная страница со всеми категориями

Route::get('/parsing', App\HTTP\Controllers\ParserController::class);


Route::group(['middleware' => 'auth'], function()
{   Route::get('/account', AccountController::class)
    ->name('account');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'admin'], 
    function() {
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/forms', AdminFormController::class);
    Route::resource('/form2', AdminForm2Controller::class);
    Route::resource('/users', UserController::class);
    
    });

});
Route::group(['middleware'=>'guest', 'prefix'=>'socialite'], function() {
    Route:: get('/auth/vk', [SocialiteController::class, 'init'])->name('vk.init');
    Route::get('/auth/vk/callback', [SocialiteController::class, 'callback'])->name('vk.callback');
});



   


