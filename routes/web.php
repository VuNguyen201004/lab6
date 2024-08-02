<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route để hiển thị form thay đổi mật khẩu
Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('password.change')->middleware('auth');

// Route để xử lý thay đổi mật khẩu
Route::post('/change-password', [AuthController::class, 'changePassword'])->middleware('auth');

use App\Http\Controllers\UserController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::post('/profile', [UserController::class, 'updateProfile']);
    Route::post('/change-password', [AuthController::class, 'changePassword']);
});
use App\Http\Controllers\AdminController;

Route::middleware(['auth','admin'])->group(function () {
    Route::get('admin/users', [AdminController::class, 'listUsers'])->name('admin.users');
    Route::post('/admin/users/{id}/toggle-active', [AdminController::class, 'toggleActive']);
});

