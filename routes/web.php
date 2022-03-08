<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',  [StudentController::class, 'index'])->name('index');
Route::get('register',  [StudentController::class, 'create'])->name('register');
Route::post('store',  [StudentController::class, 'store'])->name('store');
Route::get('success',  [StudentController::class, 'success'])->name('success');
