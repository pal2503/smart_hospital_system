<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/doctors', function () {
        return view('admin.doctors');
    });

    Route::get('/admin/patients', function () {
        return view('admin.patients');
    });
});


/*
|--------------------------------------------------------------------------
| Doctor Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:doctor'])->group(function () {

    Route::get('/doctor/dashboard', function () {
        return view('doctor.dashboard');
    });

    Route::get('/doctor/appointments', function () {
        return view('doctor.appointments');
    });
});


/*
|--------------------------------------------------------------------------
| Patient Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:patient'])->group(function () {

    Route::get('/patient/dashboard', function () {
        return view('patient.dashboard');
    });

    Route::get('/patient/appointments', function () {
        return view('patient.appointments');
    });
});


/*
|--------------------------------------------------------------------------
| Receptionist Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:receptionist'])->group(function () {

    Route::get('/receptionist/dashboard', function () {
        return view('receptionist.dashboard');
    });

    Route::get('/receptionist/patients', function () {
        return view('receptionist.patients');
    });
});


/*
|--------------------------------------------------------------------------
| Nurse Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:nurse'])->group(function () {

    Route::get('/nurse/dashboard', function () {
        return view('nurse.dashboard');
    });
});


/*
|--------------------------------------------------------------------------
| Pharmacist Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:pharmacist'])->group(function () {

    Route::get('/pharmacist/dashboard', function () {
        return view('pharmacist.dashboard');
    });

    Route::get('/pharmacist/medicines', function () {
        return view('pharmacist.medicines');
    });
});