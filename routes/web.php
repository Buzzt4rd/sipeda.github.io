<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
	// dashboard
	Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

    // data management
    // Route::resource('/manage/datas', DataController::class);

    // Route::get('/data-management', function() {
    //     return view('manage/datas/index');
    // })->name('data-management');
    Route::get('/data-management', [DataController::class, 'index'])->name('data-management');

    // add data
    Route::get('/add-data', [DataController::class, 'create'])->name('add-data');
    Route::post('/add-data', [DataController::class,'store'])->name('store-data');

    // show data
    Route::get('/detail-data/{nama}', [DataController::class, 'show'])->name('detail-data');

    //edit data
    Route::get('/edit-data/{id}/edit', [DataController::class, 'edit'])->name('edit-data');
    Route::put('/edit-data/{id}', [DataController::class, 'update'])->name('update-data');

    // destroy data
    Route::delete('/manage/datas/{id}', [DataController::class, 'destroy'])->name('delete-data');

    // logout
	Route::get('/logout', [SessionsController::class, 'destroy']);

    //login
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});

Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');
