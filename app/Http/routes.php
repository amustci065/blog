<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('home.index');
});

 //Route::get('about', 'Home\HomeController@aboutPage');
// Route::get('practice', 'Home\HomeController@practicePage');
// Route::get('gallery', 'Home\HomeController@galleryPage');
// Route::get('blog', 'Home\HomeController@blogPage');
// Route::get('show', 'Home\HomeController@showPage');
// Route::get('contact', 'Home\HomeController@contactPage');

 Route::auth();

 Route::get('/home', 'Backend\HomeController@index');

 Route::resource('/backend/blog', 'Backend\BlogController');