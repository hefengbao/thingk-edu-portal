<?php

namespace App\Filament\App\Resources\LectureResource\Pages;

use App\Filament\App\Resources\LectureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLecture extends EditRecord
{
    protected static string $resource = LectureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
