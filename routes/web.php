<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;

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
    return view('welcome');
})->middleware('guest');


Route::get('/{slug}/download', [ResumeController::class, 'download'])->name('download');
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'signin'])->name('signin');
Route::get('/register', [UserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'store'])->name('store');
//Route::get('/dashboard', [UserController::class, 'store'])->name('resume');
Route::get('/{id}/resume', [ResumeController::class, 'index'])->middleware('auth')->name('index');
Route::get('/new-resume', [ResumeController::class, 'newResume'])->name('new');
Route::get('/{slug}/create', [ResumeController::class, 'create'])->middleware('auth')->name('create');
Route::get('/{slug}/edit', [ResumeController::class, 'edit'])->middleware('auth')->name('edit');
Route::put('/{slug}/update', [ResumeController::class, 'update'])->middleware('auth')->name('update');
Route::get('/{slug}/delete', [ResumeController::class, 'destroy'])->middleware('auth')->name('delete');
Route::get('/{slug}', [ResumeController::class, 'show'])->name('preview');
Route::post('/search', [ResumeController::class, 'search'])->name('search');
Route::post('/logout',  [UserController::class, 'logout'])->name('logout');
