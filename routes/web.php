<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');

 
Route::get('/about', [UserController::class, 'about'])->name('about');
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
//Normal Users Routes List

 
//Admin Routes List
Route::middleware('auth')->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('dashboard',function(){
        return view('dashboard');
    })->name('dashboard');
});
    Route::get('/profil', [AdminController::class, 'profilepage'])->name('profil');
 
    Route::get('/test', [TestController::class, 'index'])->name('test.index');
    Route::get('/search',[TestController::class, 'search'])->name('test.index');

    Route::get('/test/create', [TestController::class, 'create'])->name('test.create');
    Route::post('/test/store', [TestController::class, 'store'])->name('test.store');
    Route::get('/test/show/{id}', [TestController::class, 'show'])->name('test.show');
    Route::get('/test/edit/{id}', [TestController::class, 'edit'])->name('test.edit');
    Route::put('/test/edit/{id}', [TestController::class, 'update'])->name('test.update');
    Route::delete('/test/destroy/{id}', [TestController::class, 'destroy'])->name('test.destroy');
