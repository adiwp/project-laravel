<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pengguna', \App\Models\User::count())
                ->description('Jumlah pengguna terdaftar')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart([7, 12, 15, 18, 20, 22, \App\Models\User::count()]),
            
            Stat::make('Artikel Diterbitkan', '0')
                ->description('Total artikel yang telah dipublikasikan')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary')
                ->chart([0, 0, 0, 0, 0, 0, 0]),
            
            Stat::make('Kategori', '0')
                ->description('Jumlah kategori artikel')
                ->descriptionIcon('heroicon-m-folder')
                ->color('warning')
                ->chart([0, 0, 0, 0, 0, 0, 0]),
        ];
    }
}
