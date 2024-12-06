<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformResource\Pages;
use App\Models\Platform;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformResource extends Resource
{
    protected static ?string $model = Platform::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Platform Management';

    protected static ?int $navigationSort = 2;

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
                                                Forms\Components\TextInput::make('title')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)
                                                    ->afterStateUpdated(fn (string $state, callable $set) =>
                                                        $set('slug', Str::slug($state))
                                                    ),

                                                Forms\Components\TextInput::make('slug')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->unique(Platform::class, 'slug', ignoreRecord: true),
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
                                    Forms\Components\Section::make('Image')
                                            ->schema([
                                                Forms\Components\FileUpload::make('image_path')
                                                    ->required()
                                                    ->image()
                                                    ->disk('public')
                                                    ->directory('platforms')
                                                    ->visibility('public')
                                                    ->columnSpanFull(),
                                            ]),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Category')
                            ->schema([
                                Forms\Components\Select::make('platform_category_id')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique('platform_categories', 'slug'),
                                    ])
                                    ->preload(),
                            ])
                            ->columnSpan(1),
                    ])
                    ->columns(3),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->disk('public')
                    ->height(50),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('published_date')
                    ->date()
                    ->sortable(),

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
            'index' => Pages\ListPlatforms::route('/'),
            'create' => Pages\CreatePlatform::route('/create'),
            'edit' => Pages\EditPlatform::route('/{record}/edit'),
        ];
    }
}
