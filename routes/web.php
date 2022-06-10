<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\models\Category;
use App\models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [ 
        'post' => $post //this calls to the class of post thats responsible for finding the correct view
    ]);

});

Route::get('categories/{category}', function(Category $category){

    return view('posts', [ 
        'posts' => $category->posts
    ]);

});

Route::get('authors/{author:username}', function(User $author){
    return view('posts', [ 
        'posts' => $author->posts
    ]);

});

