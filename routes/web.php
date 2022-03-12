<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);
Route::get('/',  [StudentController::class, 'index'])->name('index');
Route::get('register',  [StudentController::class, 'create'])->name('register');
Route::post('store',  [StudentController::class, 'store'])->name('store');
Route::get('success',  [StudentController::class, 'success'])->name('success');

Route::group(['middleware' => ['auth']], function () {
    // uses 'auth' middleware
    Route::get('admin',  [AdminController::class, 'index'])->name('admin');
    Route::get('admin/student/{student}',  [AdminController::class, 'show'])->name('student');
    Route::get('admin/student/{student}/edit',  [AdminController::class, 'edit'])->name('edit-student');
    Route::put('admin/student/{student}/update',  [AdminController::class, 'update'])->name('update-student');
    Route::delete('admin/student/{student}/delete',  [AdminController::class, 'destroy'])->name('delete-student');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

