<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutTeamHeadlineResource\Pages;
use App\Models\AboutTeamHeadline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutTeamHeadlineResource extends Resource
{
    protected static ?string $model = AboutTeamHeadline::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Our Identity Management';

    protected static ?string $navigationLabel = 'Team Headline';

    protected static ?string $modelLabel = 'Team Headline';

    protected static ?string $pluralModelLabel = 'Team Headline';

    protected static ?int $navigationSort = 17;

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
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('content.en')
                                                            ->label('Content (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('content.id')
                                                            ->label('Content (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),
                                    ])
                            ])
                            ->columnSpan(2)
                    ])
                    ->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('content')
                ->sortable()
                ->searchable()
                ->limit(50),
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
            'index' => Pages\ListAboutTeamHeadline::route('/'),
            'edit' => Pages\EditAboutTeamHeadline::route('/{record}/edit'),
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
