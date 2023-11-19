<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;


    /**
     * Customize Created Notification Title
     */
    // protected function getCreatedNotificationTitle(): ?string
    // {
    //     return 'user Created';
    // }

    /**
     * Customize Created Notification Title
     */
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('User Created')
            ->body('The user has been created successfully.');
    }
}
