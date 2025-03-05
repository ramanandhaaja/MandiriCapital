<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformEmailResource\Pages;
use App\Models\PlatformEmail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformEmailResource extends Resource
{
    protected static ?string $model = PlatformEmail::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Email Form Program';

    protected static ?int $navigationSort = 48;

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
                                                        Forms\Components\RichEditor::make('subtitle.en')
                                                            ->label('Subtitle (English)')
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('program.en')
                                                            ->label('Program (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('mandiri_ecosystem.en')
                                                            ->label('Mandiri Ecosystem (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('firstname.en')
                                                            ->label('Firstname (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('lastname.en')
                                                            ->label('Lastname (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.en')
                                                            ->label('Email (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('phone.en')
                                                            ->label('Phone (English)')
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
                                                        Forms\Components\TextInput::make('business_sector.en')
                                                            ->label('Business Sector (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('upload.en')
                                                            ->label('Upload (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('instructions.en')
                                                            ->label('Instructions (English)')
                                                            ->required()
                                                            ->maxLength(65535),
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
                                                        Forms\Components\RichEditor::make('subtitle.id')
                                                            ->label('Subtitle (Indonesian)')
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('program.id')
                                                            ->label('Program (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('mandiri_ecosystem.id')
                                                            ->label('Mandiri Ecosystem (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('firstname.id')
                                                            ->label('Firstname (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('lastname.id')
                                                            ->label('Lastname (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.id')
                                                            ->label('Email (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('phone.id')
                                                            ->label('Phone (Indonesian)')
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
                                                        Forms\Components\TextInput::make('business_sector.id')
                                                            ->label('Business Sector (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('upload.id')
                                                            ->label('Upload (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('instructions.id')
                                                            ->label('Instructions (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
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
            'index' => Pages\ListPlatformEmail::route('/'),
            'create' => Pages\CreatePlatformEmail::route('/create'),
            'edit' => Pages\EditPlatformEmail::route('/{record}/edit'),
        ];
    }
}
