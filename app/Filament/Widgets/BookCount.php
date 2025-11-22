<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Buku', Book::count())
                ->description('Jumlah buku yang tersedia')
                ->icon('heroicon-o-book-open')
                ->color('primary'),
        ];
    }
}
