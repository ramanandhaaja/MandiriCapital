<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeArticleResource\Pages;
use App\Models\HomeArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HomeArticleResource extends Resource
{
    protected static ?string $model = HomeArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Home Management';

    protected static ?int $navigationSort = 10;

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
                                                    ->unique(HomeArticle::class, 'slug', ignoreRecord: true),
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
                                                    ->image()
                                                    ->disk('public')
                                                    ->directory('home-articles')
                                                    ->visibility('public')
                                                    ->columnSpanFull(),
                                            ]),
                            ])
                            ->columnSpan(2),

                            Forms\Components\Section::make('Category')
                            ->schema([
                                Forms\Components\TextInput::make('category')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $state, callable $set) =>
                                        $set('slug', Str::slug($state))
                                    ),
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

                Tables\Columns\TextColumn::make('category')
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
            'index' => Pages\ListHomeArticles::route('/'),
            'create' => Pages\CreateHomeArticle::route('/create'),
            'edit' => Pages\EditHomeArticle::route('/{record}/edit'),
        ];
    }
}
