<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\adminController;


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

//La rotta publica del lavora con noi
Route::get('/work-with-us', [PageController::class, 'workWithUs'])->name('work.with.us');

Route::post('/user/send-role-request', [PageController::class, 'sendRoleRequest'])->name('user.role.request');
Route::get('/article/serach', [PageController::class, 'searchArticle'])->name('search.articles');


Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
});

//route admin
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-revisor',[AdminController::class, 'makeUserRevisor'])->name('admin.makeUserRevisor');
    Route::get('/admin/{user}/set-admin',[AdminController::class, 'makeUserAdmin'])->name('admin.makeUserAdmin');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'makeUserWriter'])->name('admin.makeUserWriter');

    Route::post('/tag/tag/update', [AdminController::class, 'editTag'])->name('tag.edit');
    Route::delete('/tag/tag/delete', [AdminController::class, 'deletTag'])->name('tag.delete');
    Route::post('/tag/store', [AdminController::class, 'storeTag'])->name('tag.store');

    Route::post('/category/{category}/update', [AdminController::class, 'editCategory'])->name('category.edit');
    Route::delete('/category/{category}/delete', [AdminController::class, 'deleteCategory'])->name('category.delete');

    Route::post('/category/store', [AdminController::class, 'storeCategory'])->name('category.store');

});
Route::middleware('writer')->group(function(){
    Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/article/dashboard', [ArticleController::class, 'article_dashboard'])->name('article.dashboard');
    Route::post('/article/{ article/edit }', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}/delete', [ArticleController::class, 'destroy'])->name('article.delete');

});

Route::middleware('revisor')->group(function () {
    Route::get('/revisor/dashboard', [RevisorController::class, 'revisorDashboard'])->name('revisor.dashboard');
    Route::get('/revisor/article/{article}/detail', [RevisorController::class, 'articleDetail'])->name('revisor.detail');
    Route::post('/revisor/article/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.accept');
    Route::post('/revisor/article/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.reject');
});

//la rotta serach




