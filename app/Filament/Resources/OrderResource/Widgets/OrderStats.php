<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Illuminate\Support\Number;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            Stat::make('Orders Processing', Order::query()->where('status', 'shipped')->count()),
            Stat::make('Orders Shipped', Order::query()->where('status', 'shipped')->count()),
            Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total'), 'NGN'))

        ];
    }

}
