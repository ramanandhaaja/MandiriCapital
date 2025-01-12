<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeProfileCompanyResource\Pages;
use App\Models\HomeProfileCompany;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HomeProfileCompanyResource extends Resource
{
    protected static ?string $model = HomeProfileCompany::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Home Management';

    protected static ?int $navigationSort = 11;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('company_name')
                                                    ->required()
                                                    ->maxLength(255),

                                                Forms\Components\TextInput::make('name')
                                                    ->required()
                                                    ->maxLength(255),

                                                Forms\Components\TextInput::make('title')
                                                    ->required()
                                                    ->maxLength(255),
                                            ]),

                                        Forms\Components\RichEditor::make('content')
                                            ->required()
                                            ->maxLength(65535)
                                            ->columnSpanFull(),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                        Forms\Components\DatePicker::make('published_date')
                                            ->required(),
                                            ]),

                                    ])
                                    ->columns(2),
                                Forms\Components\Section::make('Image/Video')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image_path')
                                            ->required()
                                            ->acceptedFileTypes(['image/*', 'video/*'])
                                            ->maxSize(50 * 1024) // 50MB max file size
                                            ->disk('public')
                                            ->directory('hero-sections')
                                            ->visibility('public')
                                            ->columnSpanFull(),
                                    ]),

                            ])
                            ->columnSpan(2),
                            Forms\Components\Section::make('Image/Video')
                                    ->schema([
                                        Forms\Components\FileUpload::make('company_image_path')
                                            ->required()
                                            ->acceptedFileTypes(['image/*', 'video/*'])
                                            ->maxSize(50 * 1024) // 50MB max file size
                                            ->disk('public')
                                            ->directory('hero-sections')
                                            ->visibility('public')
                                            ->columnSpanFull(),
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
                Tables\Columns\ImageColumn::make('company_image_path')
                    ->disk('public')
                    ->height(50),

                Tables\Columns\TextColumn::make('company_name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

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
            'index' => Pages\ListHomeProfileCompany::route('/'),
            'create' => Pages\CreateHomeProfileCompany::route('/create'),
            'edit' => Pages\EditHomeProfileCompany::route('/{record}/edit'),
        ];
    }
}
