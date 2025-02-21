<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationEmailResource\Pages;
use App\Models\PublicationEmail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PublicationEmailResource extends Resource
{
    protected static ?string $model = PublicationEmail::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Publication Management';

    protected static ?string $navigationLabel = 'Email Form';

    protected static ?int $navigationSort = 62;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Footer Translations')
                                    ->schema([
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('name.en')
                                                            ->label('Name (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.en')
                                                            ->label('Email (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('company.en')
                                                            ->label('Company (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('job.en')
                                                            ->label('Job Title (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('cancel.en')
                                                            ->label('Cancel (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('submit.en')
                                                            ->label('Submit (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('name.id')
                                                            ->label('Name (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.id')
                                                            ->label('Email (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('company.id')
                                                            ->label('Company (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('job.id')
                                                            ->label('Job Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('cancel.id')
                                                            ->label('Cancel (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('submit.id')
                                                            ->label('Submit (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                            ]),
                                    ]),
                            ])
                            ->columnSpan(2),
                        Forms\Components\Group::make()
                            ->schema([

                            ])
                            ->columnSpan(1),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPublicationEmail::route('/'),
            'create' => Pages\CreatePublicationEmail::route('/create'),
            'edit' => Pages\EditPublicationEmail::route('/{record}/edit'),
        ];
    }
}
