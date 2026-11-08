<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboard;
use App\Http\Controllers\Guru\AttendanceController;
use App\Http\Controllers\Guru\ScoreController;
use App\Http\Controllers\Guru\ReportController;

/*
|--------------------------------------------------------------------------
| Halaman Login & Logout (Auth)
|--------------------------------------------------------------------------
*/
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Tampilan Form Login (GET)
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Proses Submit Login (POST) -> Perhatikan URL-nya disamakan ke '/'
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Halaman ADMIN (Backend)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard Admin
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    
    // Kelola Akun Guru
    Route::resource('users', UserController::class);
    
    // Kelola Master Data Siswa & Kelas
    Route::resource('students', StudentController::class);
    Route::resource('classrooms', ClassroomController::class);
});

/*
|--------------------------------------------------------------------------
| Halaman GURU (Frontend)
|--------------------------------------------------------------------------
*/
Route::prefix('guru')->middleware(['auth'])->group(function () {
    // Dashboard Guru (Grafik & Statistik)
    Route::get('/dashboard', [GuruDashboard::class, 'index'])->name('guru.dashboard');
    
    // Kelola Presensi Siswa
    Route::resource('attendances', AttendanceController::class);
    
    // Kelola Nilai & Rapor
    Route::resource('scores', ScoreController::class);
    
    // Cetak Rekap Nilai PDF
    Route::get('/reports/pdf-preview', [ReportController::class, 'previewPdf'])->name('guru.reports.pdf');
});