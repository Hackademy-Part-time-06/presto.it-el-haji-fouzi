<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

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

Route::get('/',[PageController::class, 'homepage'])->name('homepage');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');


Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('articles.store');

//----------------------------------------------------------------
Route::get('/articles/{article}/show', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{category}/index', [ArticleController::class, 'articlesForCategory'])->name('articles.category');


Route::get('/work-with-us', [PageController::class, 'workWithUs'])->name('work.with.us');

Route::post('/user/send-role-request', [PageController::class, 'sendRoleRequest'])->name('user.role.request');



//route admin
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-revisor',[AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');
    Route::get('/admin/{user}/set-admin',[AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'makeUserWriter'])->name('makeUserWriter');

});

