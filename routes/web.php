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
    return view('welcome');
});

/**
 * Post routes
 */
Route::get('/posts', [
    'as' => 'posts.all',
    'uses' => 'PostController@index',
    //'middleware' => ['permission:view_posts']
]);

Route::get('/posts/{slug}', [
    'as' => 'posts.show',
    'uses' => 'PostController@show',
]);

/**
 * Comment routes
 */
Route::get('/posts/{post}/add-comment', [
    'as' => 'comments.create',
    'uses' => 'CommentController@create',
]);

Route::post('/posts/{post}/add-comment', [
    'as' => 'comments.store',
    'uses' => 'CommentController@store',
]);