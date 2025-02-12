<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformValueCreationResource\Pages;
use App\Models\PlatformValueCreation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformValueCreationResource extends Resource
{
    protected static ?string $model = PlatformValueCreation::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Value Creation Program';

    protected static ?string $modelLabel = 'Value Creation Program';

    protected static ?string $pluralModelLabel = 'Value Creation Program';

    protected static ?int $navigationSort = 44;

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
                                                    ->unique(PlatformValueCreation::class, 'slug', ignoreRecord: true),
                                            ]),

                                        Forms\Components\Tabs::make('Content Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('content_frontpage.en')
                                                            ->label('Content Frontpage (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('content_sub_frontpage.en')
                                                            ->label('Content Sub Frontpage (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),

                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('content_frontpage.id')
                                                            ->label('Content Frontpage (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('content_sub_frontpage.id')
                                                            ->label('Content Sub Frontpage (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),

                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Image')
                        ->schema([
                            Forms\Components\FileUpload::make('logo')
                                ->required()
                                ->image()
                                ->disk('public')
                                ->directory('platforms')
                                ->visibility('public')
                                ->columnSpanFull(),

                            Forms\Components\FileUpload::make('image_path_frontpage1')
                                ->image()
                                ->disk('public')
                                ->directory('platforms')
                                ->visibility('public')
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('image_path_frontpage2')
                                ->image()
                                ->disk('public')
                                ->directory('platforms')
                                ->visibility('public')
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('image_path_frontpage3')
                                ->image()
                                ->disk('public')
                                ->directory('platforms')
                                ->visibility('public')
                                ->columnSpanFull(),
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
                Tables\Columns\ImageColumn::make('logo')
                    ->disk('public')
                    ->height(50),

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
            'index' => Pages\ListPlatformValueCreation::route('/'),
            'create' => Pages\CreatePlatformValueCreation::route('/create'),
            'edit' => Pages\EditPlatformValueCreation::route('/{record}/edit'),
        ];
    }
}
