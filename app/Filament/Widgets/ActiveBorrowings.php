<?php

namespace App\Filament\Widgets;

use App\Models\Borrow;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ActiveBorrowings extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Peminjaman Aktif', Borrow::where('has_returned', false)->count())
                ->description('Total peminjaman yang belum dikembalikan')
                ->icon('heroicon-o-book-open')
                ->color('primary'),
        ];
    }
}
