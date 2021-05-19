<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products_listing', [App\Http\Controllers\ProductController::class, 'index'])->name('products_listing');

/**
 * Backend routes
 */

//http://localhost:8000/backend
Route::group(['prefix' => 'backend', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {

    // smita set middleware in folder Http/Kernel
    Route::group(['middleware' => 'admin'], function () {
        //Users
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
        Route::put('users/{user}', 'UserController@update')->name('users.update');
        Route::get('users/{user}', 'UserController@show')->name('users.show');
        Route::get('users/{user}/delete', 'UserController@destroy')->name('users.destroy');
    
    });


   
 });


