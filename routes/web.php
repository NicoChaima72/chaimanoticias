<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@home')->name('pages.home');



// Route::get('admin', function () {
//     return view('admin.dashboard-admin');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => 'auth',
	'as' => 'admin.'
], function () {
	Route::get('/', 'AdminController@index')->name('dashboard');
	Route::resource('colors', 'ColorsController', ['excerpt' => 'show']);
	Route::resource('categories', 'CategoriesController');
	Route::resource('news', 'NewsController');
	// Route::get('/categories/create', function () {
	//     return view('admin.categories.maintainer');
	// });
	// Route::get('/subcategories/create', function () {
	//     return view('admin.subcategories.maintainer');
	// });
	// Route::get('/colors/create', function () {
	//     return view('admin.colors.maintainer');
	// });
	// Route::get('/importances/create', function () {
	//     return view('admin.importances.maintainer');
	// });
});

Route::get('{category}/{news}', function () {
	return view('pages.news');
});
