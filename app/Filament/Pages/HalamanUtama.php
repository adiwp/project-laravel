<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HalamanUtama extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    
    protected static ?string $navigationLabel = 'Beranda';
    
    protected static ?string $title = 'Selamat Datang di LaraPress';
    
    protected static string $view = 'filament.pages.halaman-utama';
    
    // Agar halaman ini tidak muncul di navigation sidebar
    protected static bool $shouldRegisterNavigation = false;
    
    // Route path untuk halaman utama
    public static function getRoutePath(): string
    {
        return 'home';
    }
    
    // Allow public access tanpa authentication
    public static function canAccess(): bool
    {
        return true;
    }
    
    // Disable auth middleware untuk halaman ini
    public function getAuthMiddleware(): array
    {
        return [];
    }
}
