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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/invest', 'homeController@invest')->name('invest');
Route::get('/about', 'homeController@about')->name('about');
Route::get('/contact', 'homeController@contact')->name('contact');
Route::get('/details/{id}','HomeController@investdetails')->name('investdetails');




// ------------------- user Route ---------------------------
Route::group(['middleware'=>['auth','user']], function (){
	
	Route::get('/home','HomeController@home')->name('user.dashboard'); 	
	Route::get('user/dashbord', 'UserController@dashbord')->name('user.mydashboard');
	Route::get('user/edite/profile', 'UserController@editeprofile')->name('user.edit.profile');
});


// ---------------------- admin Route ------------------------
Route::group(['middleware'=>['auth','admin']], function (){
	

	//---------------------------- page route -----------------------
	Route::get('admin','AdminController@home')->name('admin.dashboard'); 
	Route::get('admin/projects','AdminController@projects')->name('admin.projects');
	Route::get('admin/basic','AdminController@basic')->name('admin.basic');
	Route::get('admin/overview','AdminController@overview')->name('admin.overview');
	Route::get('admin/details','AdminController@details')->name('admin.details');
	Route::get('admin/faq/','AdminController@faq')->name('admin.faq');
	Route::get('admin/faqtable/{id}','AdminController@faqtable')->name('admin.faqtable');
	Route::post('admin/faqadd', 'AdminController@faqAdd')->name('admin.faqAdd');

	Route::get('admin/location','AdminController@location')->name('admin.location');
	Route::get('admin/update','AdminController@update')->name('admin.update');


	// ------------------project upload route -----------------------
	Route::post('admin/basic/store','ProductController@store')->name('project.store');
	
		
});



