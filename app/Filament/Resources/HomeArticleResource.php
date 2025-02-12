<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeArticleResource\Pages;
use App\Models\HomeArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HomeArticleResource extends Resource
{
    protected static ?string $model = HomeArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Home Management';

    protected static ?string $navigationLabel = 'Counters';

    protected static ?string $modelLabel = 'Counter';

    protected static ?string $pluralModelLabel = 'Counters';

    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('content.en')
                                                            ->label('Content (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('sub_content.en')
                                                            ->label('Content Description (English)')
                                                            ->maxLength(255),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('content.id')
                                                            ->label('Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('sub_content.id')
                                                            ->label('Content Description (Indonesian)')
                                                            ->maxLength(255),
                                                    ]),
                                            ]),

                                        Forms\Components\DatePicker::make('published_date')
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpan(3),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

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
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeArticles::route('/'),
            'edit' => Pages\EditHomeArticle::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(?Model $record = null): bool
    {
        return false;
    }
}
