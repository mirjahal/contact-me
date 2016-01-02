<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact', 'ContactController@store')->name('contact.store');
    Route::get('contact/create', 'ContactController@create')->name('contact.create');
    Route::delete('contact/{contact}', 'ContactController@destroy')->name('contact.destroy');
    Route::patch('contact/{contact}', 'ContactController@update');
    Route::get('contact/{contact}', 'ContactController@show')->name('contact.show');
    Route::put('contact/{contact}', 'ContactController@update')->name('contact.update');
    Route::get('contact/{contact}/edit', 'ContactController@edit')->name('contact.edit');
});

/*
Route::resource('contact', 'ContactController');

+--------+----------+------------------------+-----------------+------------------------------------------------+------------+
| Domain | Method   | URI                    | Name            | Action                                         | Middleware |
+--------+----------+------------------------+-----------------+------------------------------------------------+------------+
|        | GET|HEAD | /                      |                 | Closure                                        |            |
|        | GET|HEAD | contact                | contact.index   | App\Http\Controllers\ContactController@index   |            |
|        | POST     | contact                | contact.store   | App\Http\Controllers\ContactController@store   |            |
|        | GET|HEAD | contact/create         | contact.create  | App\Http\Controllers\ContactController@create  |            |
|        | DELETE   | contact/{contact}      | contact.destroy | App\Http\Controllers\ContactController@destroy |            |
|        | PATCH    | contact/{contact}      |                 | App\Http\Controllers\ContactController@update  |            |
|        | GET|HEAD | contact/{contact}      | contact.show    | App\Http\Controllers\ContactController@show    |            |
|        | PUT      | contact/{contact}      | contact.update  | App\Http\Controllers\ContactController@update  |            |
|        | GET|HEAD | contact/{contact}/edit | contact.edit    | App\Http\Controllers\ContactController@edit    |            |
+--------+----------+------------------------+-----------------+------------------------------------------------+------------+
*/

