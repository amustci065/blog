<?php

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
    return view('home.index');
});

// // Home Navs 


Route::get('about', 'Home\HomeController@aboutPage');
Route::get('practice', 'Home\HomeController@practicePage');
Route::get('gallery', 'Home\HomeController@galleryPage');
Route::get('blog', 'Home\HomeController@blogPage');
//Route::get('show', 'Home\HomeController@showPage');

Route::get('/blog/{post}', [

	'uses' => 'Home\HomeController@showPage',
    'as' => 'blog.show'   
]);

Route::get('/category/{category}', [

    'uses' => 'Home\HomeController@categoryPage',
      'as' => 'category'

]);



Route::get('contact', 'Home\HomeController@contactPage');




Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('');

Route::resource('/backend/blog', 'Backend\BlogController');
//Route::get('backend/blog','Backend\BlogController@create');
//Route::post('backend/blog','Backend\BlogController@store');
//Route::put('backend/blog/{blog}', 'Backend\BlogController@createPost');

// Route::get('/backend/blog/{blog}/edit', [

//     'uses' => 'Backend\BlogController@edit',
//      'as' => 'blog.edit'
// ]);

// Route::put('/backend/blog/{blog}', [

//     'uses' => 'Backend\BlogController@update',
//      'as' => 'blog.update'
// ]);

