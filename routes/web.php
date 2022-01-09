<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Users;
use App\Http\Controllers\Ajax;
use App\Http\Controllers\Works;
use App\Http\Controllers\Notifications;
use App\Http\Controllers\Help;

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

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('works', [Works::class, 'index'])->name('works');
Route::get('works/create', [Works::class, 'create'])->name('works_create');
Route::post('works/store', [Works::class, 'store'])->name('works_store');
Route::get('works/{id}', [Works::class, 'edit'])->name('works_edit');
Route::put('works/update', [Works::class, 'update'])->name('works_update');
Route::get('works/destroy/{id}', [Works::class, 'destroy'])->whereNumber('id')->name('works_destroy');

Route::get('users', [Users::class, 'index'])->name('users');
Route::get('users/create', [Users::class, 'create'])->name('users_create');
Route::post('users/store', [Users::class, 'store'])->name('users_store');
Route::get('users/{id}', [Users::class, 'edit'])->name('users_edit');
Route::put('users/update', [Users::class, 'update'])->name('users_update');
Route::get('users/destroy/{id}', [Users::class, 'destroy'])->whereNumber('id')->name('users_destroy');

Route::get('help', [Help::class, 'index'])->name('help');

Route::get('notifications', [Notifications::class, 'index'])->name('notifications');
Route::get('notifications/{id}', [Notifications::class, 'show'])->name('notifications_show');

Route::get('ajax', [Ajax::class, 'index']);
Route::post('ajax', [Ajax::class, 'post'])->name('ajax');
