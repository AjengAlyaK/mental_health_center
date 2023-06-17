<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
Route::get('/logout', [HomeController::class, 'logout']);

// admin
Route::get('/appointment', [AdminController::class, 'appointment']);
Route::get('/user', [HomeController::class, 'user']);
Route::get('/tambah_user', [AdminController::class, 'tambah_user']);
Route::post('/save_user', [AdminController::class, 'save_user']);
Route::get('/edit_user/{id}', [AdminController::class, 'edit_user']);
Route::post('/save_edit_user/{id}', [AdminController::class, 'save_edit_user']);
Route::get('/hapus_user/{id}', [AdminController::class, 'hapus_user']);
Route::get('/delete_appointment/{id}', [AdminController::class, 'delete_appointment']);
Route::get('/konfirmasi_appointment/{id}', [AdminController::class, 'edit_appointment']);
Route::post('/save_edit_appointmnet/{id}', [AdminController::class, 'save_edit_appointmnet']);

Route::get('/page', [AdminController::class, 'page']);
// Route::get('/back', [HomeController::class, 'back']);
Route::get('/dokter', [AdminController::class, 'dokter']);
Route::get('/tambah', [AdminController::class, 'tambah']);
Route::post('/tambah_dokter', [AdminController::class, 'tambah_dokter']);
Route::get('/delete_dokter/{id}', [AdminController::class, 'delete_dokter']);
Route::get('/edit_dokter/{id}', [AdminController::class, 'edit_dokter']);
Route::post('/save_edit_dokter/{id}', [AdminController::class, 'save_edit_dokter']);

// make an artikel
Route::get('/artikel', [AdminController::class, 'artikel']);
Route::get('/tambah_artikel', [AdminController::class, 'tambah_artikel']);
Route::post('/save_artikel', [AdminController::class, 'save_artikel']);
Route::get('/delete_artikel/{id}', [AdminController::class, 'delete_artikel']);
Route::get('/edit_artikel/{id}', [AdminController::class, 'edit_artikel']);
Route::post('/update_artikel/{id}', [AdminController::class, 'update_artikel']);
// yet created
Route::get('/news/{id}', [AdminController::class, 'news']);

// user
Route::get('/profile', [UserController::class, 'profile']);
Route::post('/update_profile/{id}', [UserController::class, 'update_profile']);
Route::post('/tambah_appointment', [UserController::class, 'tambah_appointment']);
Route::get('/logout_page', [UserController::class, 'logout']);
Route::get('/appointment_user', [UserController::class, 'appointment_user']);
Route::get('/delete_appointment_user/{id}', [UserController::class, 'delete_appointment_user']);