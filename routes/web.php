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
// надстройки аудентификации
Auth::routes(['reset' => false, 'confirm' => false, 'verify' => false]);

// Выход из аудентификации
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('/logout', 'Auth\LoginController@logout ')->name('logout');

// если пользователь админ, перенаправлять на панель администрации
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/orders', 'HomeController@index')->name('home');
    });
    // редактирование в админке
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});

// главная страница
Route::get('/', 'MainController@index')->name('index');

// категории товаров
Route::get('/categories', 'MainController@categories')->name('categories');

// группа для работы с товарами корзины
Route::group(['middleware' => 'basket_not_empty', 'prefix' => 'basket'], function() {
    Route::post('/add/{id}', 'BasketController@basketAdd')->name('basket-add');
});

// группа с корзиной
Route::group(['middleware' => 'basket_not_empty', 'prefix' => 'basket'], function() {
    Route::get('/', 'BasketController@basket')->name('basket');
    Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
    Route::post('/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
    Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
});

// категория продукта
Route::get('/{category}', 'MainController@category')->name('category');
Route::get('/{category}/{product?}', 'MainController@product')->name('product');
