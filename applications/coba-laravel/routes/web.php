<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home' , [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "name" => "Fauzi Kirito",
        "email" => "fauziilyasfin@gmail.com",
        "image" => "Yuito.jpg"
    ]);
});

//Halaman Posts
Route::get('/posts', [PostController::class, 'index']);

//Halaman Single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


//Route untuk Halaman Categories
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);
});


//Route untuk Halaman Authors
Route::get('/authors/{author:username}', function(User $author) { //Diberi alias menjadi $author yang sebenarnya User
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});