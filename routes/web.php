<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Admin\TranslateController as Translate;
use App\Http\Controllers\Admin\ProjectCategoryController as ProjectCategory;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/translate', [Translate::class, 'index'])->name('admin.translations');
    Route::post('/translate',[Translate::class, 'update']);
    Route::post('/translate/create', [Translate::class, 'create_files'])->name('admin.translate_create');
    Route::resource('/project-category', ProjectCategory::class);

});
