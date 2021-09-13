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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


use App\Http\Controllers\PostsController;

    Route::get('/', [PostsController::class, 'showPosts']);
    Route::get('/category/{id}', [PostsController::class, 'showCategory']);
    Route::get('/subcategory/{id}/', [PostsController::class, 'showSubcategory']);
    Route::post('/subcategory/{id}/', [PostsController::class, 'getPost']) -> middleware('auth');

    //admin
use App\Http\Controllers\AdminPostController;
    Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

        Route::get('/', [AdminPostController::class, 'show']); //show posts
        Route::match(['GET', 'POST'], '/post/{id}', [AdminPostController::class, 'edit']); //post edit

    });
