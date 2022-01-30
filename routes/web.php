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

// custom route

/*
Route::get('/', function (){
    return 'Hello, world!';
});
*/


Route::get('/', function(){
    return view('welcome');
});


Route::get('about', function(){
    return view('about');
});


Route::get('products', function(){
    return view('products');
});


Route::get('service', function(){
    return view('services');
});


// routes on other actions

Route::put('/', function(){
    // handle someone sending PUT request to this route
});

Route::post('/', function(){
    // handle someone sending POST request to this route
});

Route::delete('/', function(){
    // handle someone sending DELETE request to this route
});

Route::any('/', function(){
    // handle any verb request to this route
});

Route::match(['get','post'], '/', function(){
    // handle GET or POST requests to this route
});


// routes calling controller methods

Route::get('members', 'MembersController@member');


// definning aroute with name()

Route::get('members', 'MembersController@member')->name('members.show');


// definning a group route

Route::group(function(){
    Route::get('hellow', function(){
        return 'hellow';
    });

    Route::get('world', function(){
        return 'world';
    });
});