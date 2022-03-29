<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;

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
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/form-patient', function () {
    return view('form-patient');
})->middleware(['auth'])->name('form-patient');

Route::post('/form-patient', [FormController::class, 'proses'])->name('process-form');


Route::get('/table-patient', function () {
    return view('table-patient');
})->middleware(['auth'])->name('table-patient');

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/post/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function() {
//     return view('categories', [
//         "title" => 'Post by Categories',
//         "categories" => Category::all()
//     ]);
// });

// Route::get('/category/{category:slug}', function(Category $category){
//     return view('category', [
//         "title" => $category->name,
//         "posts" => $category->posts,
//         'category' => $category->name
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author) {
//     return view('posts', [
//         "title" => 'User Posts',
//         "posts" => $author->posts,

//     ]);
// });

require __DIR__.'/auth.php';
