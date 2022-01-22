<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'index'])->name('index');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/service', [PagesController::class,'service'])->name('service'); 
Route::get('/portfolio', [PagesController::class,'portfolio'])->name('portfolio');
Route::get('/blog', [PagesController::class,'blog'])->name('blog');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');
