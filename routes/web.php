<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\controllers\Buku;
use App\Http\Controllers\Anggota;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Dashboard::class, 'show']);
Route::get('/buku/add', [Buku::class, 'add']);
Route::get('/anggota/add', [Anggota::class, 'add']);
Route::get('login/', [AuthController::class, 'login']);
Route::get('register/', [AuthController::class, 'register']);
