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

    protected static ?string $navigationLabel = 'Get Investment Category';

    protected static ?string $modelLabel = 'Get Investment Category';

    protected static ?string $pluralModelLabel = 'Get Investment Category';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                ->schema([
                    Forms\Components\Section::make()
                        ->schema([
                            Forms\Components\Tabs::make('Content Translations')
                                ->tabs([
                                    Forms\Components\Tabs\Tab::make('English')
                                        ->schema([
                                            Forms\Components\TextInput::make('title.en')
                                                ->label('Title (English)')
                                                ->required()
                                                ->maxLength(255)
                                                ->live(onBlur: true)
                                                ->columnSpanFull(),

                                            Forms\Components\RichEditor::make('content.en')
                                                ->label('Content (English)')
                                                ->maxLength(65535)
                                                ->columnSpanFull(),

                                            Forms\Components\TextInput::make('title_sub.en')
                                                ->label('Sub Title (English)')
                                                ->maxLength(255)
                                                ->live(onBlur: true)
                                                ->columnSpanFull(),

                                            Forms\Components\RichEditor::make('content_sub.en')
                                                ->label('Sub Content (English)')
                                                ->maxLength(65535)
                                                ->columnSpanFull(),
                                        ]),

                                    Forms\Components\Tabs\Tab::make('Indonesian')
                                        ->schema([
                                            Forms\Components\TextInput::make('title.id')
                                                ->label('Title (Indonesian)')
                                                ->required()
                                                ->maxLength(255)
                                                ->live(onBlur: true)
                                                ->columnSpanFull(),

                                            Forms\Components\RichEditor::make('content.id')
                                                ->label('Content (Indonesian)')
                                                ->maxLength(65535)
                                                ->columnSpanFull(),

                                            Forms\Components\TextInput::make('title_sub.id')
                                                ->label('Sub Title (Indonesian)')
                                                ->maxLength(255)
                                                ->live(onBlur: true)
                                                ->columnSpanFull(),

                                            Forms\Components\RichEditor::make('content_sub.id')
                                                ->label('Sub Content (Indonesian)')
                                                ->maxLength(65535)
                                                ->columnSpanFull(),
                                        ]),
                                ])
                                ->columnSpanFull(),
                        ])
                        ->columns(2),
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
