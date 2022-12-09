<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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
    return view('welcome');
});



Route::resource('department', DepartmentController::class);
Route::resource('user', UserController::class);
Route::resource('skills', SkillsController::class);

Route::resource('note', NotesController::class);
Route::resource('task', TaskController::class);
// Route::resource('login', LoginController::class);

Route::get('/dash', function () {
    return view('dashboard');
    
});

Auth::routes();

Route::get('/login', [HomeController::class, 'index'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');