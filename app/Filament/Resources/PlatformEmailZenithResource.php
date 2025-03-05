<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformEmailZenithResource\Pages;
use App\Models\PlatformEmail;
use App\Models\PlatformEmailZenith;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformEmailZenithResource extends Resource
{
    protected static ?string $model = PlatformEmailZenith::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Email Form Program Zenith';

    protected static ?int $navigationSort = 49;

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
                                        Forms\Components\TextInput::make('destination')
                                            ->label('Email Destination')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('headline1.en')
                                                            ->label('Headline (English)')
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
                                                        Forms\Components\TextInput::make('website_url.en')
                                                            ->label('Website URL (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('fullname.en')
                                                            ->label('Fullname (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('linkedin.en')
                                                            ->label('Linkedin (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('whatsapp.en')
                                                            ->label('Whatsapp (English)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('headline2.en')
                                                            ->label('Headline 2 (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('which_zenith.en')
                                                            ->label('Which Zenith (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('which_sector.en')
                                                            ->label('Which Sector (English)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('description.en')
                                                            ->label('Description (English)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('revenue.en')
                                                            ->label('Revenue (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('established.en')
                                                            ->label('Established (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                            Forms\Components\TextInput::make('employee.en')
                                                            ->label('Employee (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('is_indonesian.en')
                                                            ->label('Is Indonesian (English)')
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
                                                        Forms\Components\TextInput::make('headline1.id')
                                                            ->label('Headline (Indonesian)')
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
                                                        Forms\Components\TextInput::make('website_url.id')
                                                            ->label('Website URL (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('fullname.id')
                                                            ->label('Fullname (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('linkedin.id')
                                                            ->label('Linkedin (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('whatsapp.id')
                                                            ->label('Whatsapp (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('headline2.id')
                                                            ->label('Headline 2 (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('which_zenith.id')
                                                            ->label('Which Zenith (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('which_sector.id')
                                                            ->label('Which Sector (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('description.id')
                                                            ->label('Description (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('revenue.id')
                                                            ->label('Revenue (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('established.id')
                                                            ->label('Established (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                            Forms\Components\TextInput::make('employee.id')
                                                            ->label('Employee (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('is_indonesian.id')
                                                            ->label('Is Indonesian (Indonesian)')
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
            'index' => Pages\ListPlatformEmailZenith::route('/'),
            'create' => Pages\CreatePlatformEmailZenith::route('/create'),
            'edit' => Pages\EditPlatformEmailZenith::route('/{record}/edit'),
        ];
    }
}
