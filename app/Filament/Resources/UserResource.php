<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;

use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\RelationManagers\OrdersRelationManager;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';  // controls icon from heroicons

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),

                TextInput::make('email')
                ->label('Email Address')
                ->email()
                ->maxlength(255)
                ->unique(ignoreRecord: true)
                ->autocomplete(false)
                ->required(),

                DateTimePicker::make('email_verified_at')
                ->label('Email Verified At')
                ->default(now()),

                TextInput::make('password')
                    ->password()
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn ($operation): bool => $operation == 'create'),
            ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('email_verified_at')->dateTime()->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Show actions
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\DeleteAction::make(),
                // Groupe actions
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])

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
            OrdersRelationManager::class
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
