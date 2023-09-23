<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project/{id}', [HomeController::class, 'showProject'])->name('show');

Route::get('/admin/login', [AdminController::class, 'loginPage'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('/admin/profile', [AdminController::class, 'updateProfile'])->name('updateProfile');
    
    Route::get('/admin/profile/detail', [AdminController::class, 'profiledtl'])->name('profiledtl');
    Route::put('/admin/profile/detail', [AdminController::class, 'updateprofiledtl'])->name('updateprofiledtl');
    
    Route::get('/admin/projects', [AdminController::class, 'projects'])->name('projects');
    Route::get('/admin/projects/edit/{id}', [AdminController::class, 'editProject'])->name('editProject');
    Route::put('/admin/projects/edit/{id}', [AdminController::class, 'updateProject'])->name('updateProject');
    Route::get('/admin/projects/input', [AdminController::class, 'inputProjects'])->name('inputProjects');
    Route::post('/admin/projects/input', [AdminController::class, 'storeProject']);
    Route::delete('/admin/projects/delete/{id}', [AdminController::class, 'deleteProject'])->name('deleteProject');
});
