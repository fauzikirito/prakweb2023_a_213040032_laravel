<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
        "title" => "Home",
        "active"=> "home",
    ]);
});

Route::get('/about', function () {
    return view('about' , [
        "title" => "About",
        "active"=> "about",
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

Route::get('/login', [LoginController::class, 'index']);


Route::get('/register', [RegisterController::class, 'index']);


//Route untuk Halaman Categories
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });


//Route untuk Halaman Authors
// Route::get('/authors/{author:username}', function(User $author) { //Diberi alias menjadi $author yang sebenarnya User
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         "active"=> "author",
//         "active" => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });