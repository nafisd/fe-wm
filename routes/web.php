<?php

use App\Livewire\Auth\Login;
use App\Livewire\MainPage\Master;
use Illuminate\Support\Facades\Route;
use App\Livewire\DashboardComponent\DashboardMhs;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', action:Login::class)->name('login');

// Route::get('/', action: Master::class);
Route::get('/mahasiswa/dashboard', DashboardMhs::class)->name('dashboard.mahasiswa');
