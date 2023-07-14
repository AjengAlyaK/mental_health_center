<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/redirect', [HomeController::class, 'redirect']);
// Route::get('/login_page', [HomeController::class, 'login']);
Route::get('/logout', [HomeController::class, 'logout'])->middleware('auth');

// admin
Route::get('/appointment', [AdminController::class, 'appointment'])->middleware(['auth', 'must-admin']);
Route::get('/user', [HomeController::class, 'user'])->middleware('auth')->middleware(['auth', 'must-admin']);
Route::get('/tambah_user', [AdminController::class, 'tambah_user'])->middleware(['auth', 'must-admin']);
Route::post('/save_user', [AdminController::class, 'save_user'])->middleware(['auth', 'must-admin']);
Route::get('/edit_user/{id}', [AdminController::class, 'edit_user'])->middleware(['auth', 'must-admin']);
Route::post('/save_edit_user/{id}', [AdminController::class, 'save_edit_user'])->middleware(['auth', 'must-admin']);
Route::get('/hapus_user/{id}', [AdminController::class, 'hapus_user'])->middleware(['auth', 'must-admin']);
Route::get('/delete_appointment/{id}', [AdminController::class, 'delete_appointment'])->middleware(['auth', 'must-admin']);
Route::get('/konfirmasi_appointment/{id}', [AdminController::class, 'edit_appointment'])->middleware(['auth', 'must-admin']);
Route::post('/save_edit_appointmnet/{id}', [AdminController::class, 'save_edit_appointmnet'])->middleware(['auth', 'must-admin']);
Route::get('/page', [AdminController::class, 'page'])->middleware(['auth', 'must-admin']);
Route::get('/dokter', [AdminController::class, 'dokter'])->middleware(['auth', 'must-admin']);
Route::get('/tambah', [AdminController::class, 'tambah'])->middleware(['auth', 'must-admin']);
Route::post('/tambah_dokter', [AdminController::class, 'tambah_dokter'])->middleware(['auth', 'must-admin']);
Route::get('/delete_dokter/{id}', [AdminController::class, 'delete_dokter'])->middleware(['auth', 'must-admin']);
Route::get('/edit_dokter/{id}', [AdminController::class, 'edit_dokter'])->middleware(['auth', 'must-admin']);
Route::post('/save_edit_dokter/{id}', [AdminController::class, 'save_edit_dokter'])->middleware(['auth', 'must-admin']);
// make an artikel
Route::get('/artikel', [AdminController::class, 'artikel'])->middleware(['auth', 'must-admin']);
Route::get('/tambah_artikel', [AdminController::class, 'tambah_artikel'])->middleware(['auth', 'must-admin']);
Route::post('/save_artikel', [AdminController::class, 'save_artikel'])->middleware(['auth', 'must-admin']);
Route::get('/delete_artikel/{id}', [AdminController::class, 'delete_artikel'])->middleware(['auth', 'must-admin']);
Route::get('/edit_artikel/{id}', [AdminController::class, 'edit_artikel'])->middleware(['auth', 'must-admin']);
Route::post('/update_artikel/{id}', [AdminController::class, 'update_artikel'])->middleware(['auth', 'must-admin']);
Route::get('/news/{id}', [AdminController::class, 'news'])->middleware(['auth', 'must-admin']);

// user
Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth', 'must-user']);
Route::post('/update_profile/{id}', [UserController::class, 'update_profile'])->middleware(['auth', 'must-user']);
Route::post('/tambah_appointment', [UserController::class, 'tambah_appointment'])->middleware(['auth', 'must-user']);
Route::get('/logout_page', [UserController::class, 'logout'])->middleware(['auth', 'must-user']);
Route::get('/appointment_user', [UserController::class, 'appointment_user'])->middleware(['auth', 'must-user']);
Route::get('/delete_appointment_user/{id}', [UserController::class, 'delete_appointment_user'])->middleware(['auth', 'must-user']);