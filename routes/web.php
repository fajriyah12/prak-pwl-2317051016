<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserControllers;

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
});

Route::get('/profile/{nama}/{nim}/{kelas}, [ProfileController::class,profile');

Route::get('/user', [UserControllers::class, 'index']);
Route::get('/user/create', [UserControllers::class, 'create'])->name('user.create');
Route::post('/user', [UserControllers::class, 'store'])->name('user.store');
