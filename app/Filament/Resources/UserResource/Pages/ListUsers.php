<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make('All'),

            'This Weed' => Tab::make('This week')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subWeek()))
                ->badge(User::query()->where('created_at', '>=', now()->subWeek())->count()),
            'This Month' => Tab::make('This week')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subMonth()))
                ->badge(User::query()->where('created_at', '>=', now()->subMonth())->count()),

            'This Year' => Tab::make('This week')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subYear()))
                ->badge(User::query()->where('created_at', '>=', now()->subYear())->count()),
        ];
    }
}
