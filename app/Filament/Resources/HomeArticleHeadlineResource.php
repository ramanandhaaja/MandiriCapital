<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeArticleHeadlineResource\Pages;
use App\Models\HomeHeadline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HomeArticleHeadlineResource extends Resource
{
    protected static ?string $model = HomeHeadline::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Headline News';

    protected static ?string $navigationGroup = 'Home Management';

    protected static ?string $modelLabel = 'Headline News';

    protected static ?string $pluralModelLabel = 'Headline News';

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

                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('category.en')
                                                            ->label('Category (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\Checkbox::make('hide_category')
                                                            ->label('Hide Category')
                                                            ->default(false),
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->maxLength(255),
                                                        Forms\Components\Checkbox::make('hide_title')
                                                            ->label('Hide Title')
                                                            ->default(false),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('category.id')
                                                            ->label('Category (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\Checkbox::make('hide_category')
                                                            ->label('Hide Category')
                                                            ->default(false),
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->maxLength(255),
                                                        Forms\Components\Checkbox::make('hide_title')
                                                            ->label('Hide Title')
                                                            ->default(false),

                                                    ]),
                                            ])
                                            ->columnSpanFull(),
                                        Forms\Components\TextInput::make('link_url')
                                            ->label('Link URL')
                                            ->maxLength(255)
                                            ->columnSpanFull(),
                                        Forms\Components\TextInput::make('type')
                                            ->label('Category')
                                            ->disabled()
                                            ->maxLength(255),

                                    ])
                                    ->columns(2),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Headline Image')
                                    ->schema([
                                        Forms\Components\FileUpload::make('logo_path')
                                            ->acceptedFileTypes(['image/*', 'video/*'])
                                            ->maxSize(50 * 1024) // 50MB max file size
                                            ->disk('public')
                                            ->directory('hero-sections')
                                            ->visibility('public')
                                            ->columnSpanFull(),
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
                            ->columnSpan(1),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Headline Image')
                    ->disk('public')
                    ->height(50),

                Tables\Columns\TextColumn::make('category')
                    ->label('Category')
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
            'index' => Pages\ListHomeArticleHeadline::route('/'),
            'create' => Pages\CreateHomeArticleHeadline::route('/create'),
            'edit' => Pages\EditHomeArticleHeadline::route('/{record}/edit'),
        ];
    }
}
