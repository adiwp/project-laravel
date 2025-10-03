<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| LaraPress menggunakan Filament untuk admin dan auth.
| Homepage adalah custom Filament page yang bisa diakses publik.
|
| - Halaman Utama (/)           : Redirect ke Filament Home
| - Admin Panel (/admin)        : Filament Panel
| - Login (/admin/login)        : Filament Auth
| - Register (/admin/register)  : Filament Auth
| - Dashboard (/admin/dashboard): Filament Dashboard
|
*/

// Redirect root ke Filament homepage
Route::get('/', function () {
    return redirect('/admin/home');
});
