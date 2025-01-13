<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioFundingArticleSubResource\Pages;
use App\Models\PortfolioFundingArticleSub;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PortfolioFundingArticleSubResource extends Resource
{
    protected static ?string $navigationGroup = 'Investment Management';
    protected static bool $shouldRegisterNavigation = true;
    protected static ?bool $isNavigationGroupCollapsed = true;

    protected static ?string $model = PortfolioFundingArticleSub::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 36;

    protected static ?string $navigationLabel = 'Funding Sub-Articles';

    protected static ?string $modelLabel = 'Funding Sub-Articles';

    protected static ?string $pluralModelLabel = 'Funding Sub-Articles';

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
                                            ->live(onBlur: true),

                                        ]),

                                Forms\Components\RichEditor::make('content')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),


                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('image_path')
                        ->schema([
                            Forms\Components\FileUpload::make('image_path')
                                ->image()
                                ->image()
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),

                        ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->disk('public'),

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
            'index' => Pages\ListPortfolioFundingArticleSub::route('/'),
            'create' => Pages\CreatePortfolioFundingArticleSub::route('/create'),
            'edit' => Pages\EditPortfolioFundingArticleSub::route('/{record}/edit'),
        ];
    }
}
