<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HalamanUtama extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    
    protected static ?string $navigationLabel = 'Beranda';
    
    protected static ?string $title = 'Selamat Datang di LaraPress';
    
    protected static string $view = 'filament.pages.halaman-utama';
    
    // Agar halaman ini bisa diakses tanpa login
    protected static bool $shouldRegisterNavigation = false;
    
    public static function getRoutePath(): string
    {
        return '/';
    }
    
    public function mount(): void
    {
        // Jika ingin halaman ini bisa diakses publik, hapus auth middleware
        // dengan cara override boot() di panel provider
    }
}
