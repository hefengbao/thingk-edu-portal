<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\ClubActivityResource\Pages;
use App\Filament\App\Resources\ClubActivityResource\RelationManagers;
use App\Models\ClubActivity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClubActivityResource extends Resource
{
    protected static ?string $model = ClubActivity::class;
    protected static ?string $modelLabel = '社团活动';
    protected static ?string $pluralModelLabel = '社团活动';
    protected static ?string $navigationGroup = '资讯 & 通知';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClubActivities::route('/'),
            'create' => Pages\CreateClubActivity::route('/create'),
            'edit' => Pages\EditClubActivity::route('/{record}/edit'),
        ];
    }
}
