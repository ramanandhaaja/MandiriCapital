<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMandiriEcosystemResource\Pages;
use App\Models\AboutMandiriEcosystem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutMandiriEcosystemResource extends Resource
{
    protected static ?string $model = AboutMandiriEcosystem::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Our Identity Management';

    protected static ?string $navigationLabel = 'Mandiri Ecosystem';

    protected static ?string $modelLabel = 'Mandiri Ecosystem';

    protected static ?string $pluralModelLabel = 'Mandiri Ecosystems';

    protected static ?int $navigationSort = 16;

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
                                                    ->afterStateUpdated(
                                                        fn(string $state, callable $set) =>
                                                        $set('slug', Str::slug($state))
                                                    ),


                                            ]),

                                        Forms\Components\RichEditor::make('content')

                                            ->maxLength(65535)
                                            ->columnSpanFull(),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('slug')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->unique(AboutMandiriEcosystem::class, 'slug', ignoreRecord: true),


                                            ]),

                                    ])
                                    ->columns(2),

                                Forms\Components\Section::make('Mouse-Hover')
                                    ->schema([
                                        Forms\Components\RichEditor::make('hover_focus_area')
                                            ->label('Hover Focus Area')
                                            ->maxLength(65535)
                                            ->columnSpanFull(),

                                        Forms\Components\RichEditor::make('hover_content')
                                            ->label('Hover Content')
                                            ->maxLength(65535)
                                            ->columnSpanFull(),

                                    ])
                                    ->columns(2),


                            ])
                            ->columnSpan(2),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Headline')
                                    ->schema([
                                        Forms\Components\Checkbox::make('is_headline')
                                            ->label('Headline')
                                            ->default(true)
                                            ->columnSpanFull(),
                                    ]),
                                Forms\Components\Section::make('Tag')
                                    ->schema([
                                        Forms\Components\Grid::make()
                                            ->schema([
                                                Forms\Components\Checkbox::make('is_domestic')
                                                    ->label('Domestic')
                                                    ->default(true),
                                                Forms\Components\Checkbox::make('is_international')
                                                    ->label('International')
                                                    ->default(false),
                                            ])
                                            ->columns(2),
                                    ]),

                                Forms\Components\Section::make('Image')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image_path')
                                            ->image()
                                            ->disk('public')
                                            ->directory('our-identity')
                                            ->visibility('public')
                                            ->columnSpanFull(),
                                    ]),
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
            'index' => Pages\ListAboutMandiriEcosystem::route('/'),
            'edit' => Pages\EditAboutMandiriEcosystem::route('/{record}/edit'),
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
