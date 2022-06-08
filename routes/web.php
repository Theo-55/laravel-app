<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
        'posts' => Post::all()
    ]);//testing github setup
});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [ 
        'post' => $post //this calls to the class of post thats responsible for finding the correct view
    ]);

});

Route::get('category/{category}', function(Category $category){

    return view('post', [ 
        'post' => $category->posts //this calls to the class of post thats responsible for finding the correct view
    ]);

});

