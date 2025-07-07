<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;

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

// 
Route::get('/', function () {
    return view('Customer.index');
});
Route::get('/menu/{slug}', function ($slug) {
    return view('menu.detail', ['slug' => $slug]);
})->name('menu.show');
Route::get('/pengaturan', function() {
    return view('pengaturan.setting');
})->name('pengaturan');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth', 'role:super_admin'])->get('/dashboard/superadmin', [DashboardController::class, 'superadmin'])->name('dashboard.superadmin');

Route::middleware(['auth', 'role:admin'])->get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');

Route::middleware(['auth', 'role:mitra'])->get('/dashboard/mitra', [DashboardController::class, 'mitra'])->name('dashboard.mitra');

Route::post('/orders/{id}/upload-proof', [OrderController::class, 'uploadProof'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout');
});

// untuk API
Route::get('/api/services/search', [ServiceController::class, 'search']);




