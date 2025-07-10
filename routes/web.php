<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Mitra\MitraController;
use App\Http\Controllers\Mitra\MembershipController;

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

//menu
Route::get('/menu/{slug}', function ($slug) {
    return view('menu.detail', ['slug' => $slug]);
})->name('menu.show');

//pengaturan
Route::get('/pengaturan', function() {
    return view('pengaturan.setting');
})->name('pengaturan');

//riwayat
Route::get('/riwayat/akhir-akhir ini', function() {
    return view('riwayat.akhir');
});
Route::get('/riwayat/makanan', function() {
    return view('riwayat.makanan');
});
Route::get('/riwayat/mobil', function() {
    return view('riwayat.mobil');
});
Route::get('/riwayat/guide', function() {
    return view('riwayat.guide');
});

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

// Group route khusus role MITRA
Route::middleware(['auth', 'mitra'])->prefix('mitra')->name('mitra.')->group(function () {

    // Dashboard mitra (statistik total layanan, pesanan, ulasan, pendapatan)
    Route::get('/dashboard', [MitraController::class, 'dashboard'])->name('dashboard');

    // Manajemen layanan mitra
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Pesanan masuk dan update status
    Route::get('/orders', [MitraController::class, 'orders'])->name('orders.index');
    Route::post('/orders/{id}/status', [MitraController::class, 'updateOrderStatus'])->name('orders.update-status');

    // Laporan transaksi (pesanan selesai & sudah dibayar)
    Route::get('/transactions', [MitraController::class, 'transactions'])->name('transactions.index');

    // Membership: lihat & perpanjang
    Route::get('/membership', [MembershipController::class, 'index'])->name('membership.index');
    Route::post('/membership/renew', [MembershipController::class, 'renew'])->name('membership.renew');

});