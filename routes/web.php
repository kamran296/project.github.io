<?php

use App\Http\Controllers\post_controller;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create_post',function(){
    return view('create-post');
})->name('create-post-route');


Route::get('/update_post',function(){
    return view('update-post');
})->name('update-post-route');


Route::get('/read_post',function(){
    return view('read-post');
})->name('read-post-route');


Route::get('/posts',function(){
    return view('posts');
})->name('posts');





// controller
Route::get('/create-post',[post_controller::class,'addpost']);

Route::post('/create-post',[post_controller::class, 'createpost'])->name('post.create');

Route::get('/posts',[post_controller::class,'getPost']);