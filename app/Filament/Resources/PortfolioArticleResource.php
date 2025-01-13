<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioArticleResource\Pages;
use App\Models\PortfolioArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PortfolioArticleResource extends Resource
{
    protected static ?string $navigationGroup = 'Investment Management';
    protected static bool $shouldRegisterNavigation = true;
    protected static ?bool $isNavigationGroupCollapsed = true;

    protected static ?string $model = PortfolioArticle::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 30;

    protected static ?string $navigationLabel = 'Get Investment Articles';

    protected static ?string $modelLabel = 'Get Investment Articles';

    protected static ?string $pluralModelLabel = 'Get Investment Articles';

    public static function form(Form $form): Form
    {
        return $form
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

                                         ]),

                                Forms\Components\RichEditor::make('content')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),

                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('title_sub')
                                            ->maxLength(255)
                                            ->live(onBlur: true)

                                         ]),

                                Forms\Components\RichEditor::make('content_sub')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),





                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Article Sub Items')
                            ->schema([
                                Forms\Components\HasManyRepeater::make('subArticles')
                                    ->relationship('subArticles')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\RichEditor::make('content')
                                            ->required()
                                            ->columnSpanFull(),
                                        Forms\Components\Grid::make(3)
                                            ->schema([
                                                Forms\Components\FileUpload::make('icon')
                                                    ->image()
                                                    ->disk('public')
                                                    ->directory('portfolios'),
                                                Forms\Components\TextInput::make('text_icon')
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('order')
                                                    ->numeric()
                                                    ->default(0),
                                            ]),
                                        Forms\Components\Toggle::make('is_active')
                                            ->default(true)
                                            ->inline(false),
                                    ])
                                    ->orderColumn('order')
                                    ->defaultItems(0)
                                    ->reorderable()
                                    ->columnSpanFull()
                            ])
                    ])
                    ->columnSpan(['lg' => 2]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('content')
                    ->limit(50)
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
            'index' => Pages\ListPortfolioArticle::route('/'),
            'create' => Pages\CreatePortfolioArticle::route('/create'),
            'edit' => Pages\EditPortfolioArticle::route('/{record}/edit'),
        ];
    }
}
