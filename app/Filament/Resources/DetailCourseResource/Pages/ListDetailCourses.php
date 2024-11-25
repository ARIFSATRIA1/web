<?php

namespace App\Filament\Resources\DetailCourseResource\Pages;

use App\Filament\Resources\DetailCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailCourses extends ListRecords
{
    protected static string $resource = DetailCourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
