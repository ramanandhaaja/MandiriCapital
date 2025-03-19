<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Publication Management';

    protected static ?int $navigationSort = 60;

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
                                                            ->live(onBlur: true)
                                                            ->afterStateUpdated(
                                                                fn(string $state, callable $set) =>
                                                                $set('slug', Str::slug($state))
                                                            ),

                                                        Forms\Components\RichEditor::make('content.en')
                                                            ->label('Content (English)')
                                                            ->required()
                                                            ->columnSpanFull(),
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
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\Checkbox::make('hide_category')
                                                    ->label('Hide Category')
                                                    ->default(false),
                                                Forms\Components\Checkbox::make('hide_title')
                                                    ->label('Hide Title')
                                                    ->default(false),
                                            ]),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(Publication::class, 'slug', ignoreRecord: true),


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
                                            ->directory('publications')
                                            ->visibility('public')
                                            ->columnSpanFull(),
                                    ]),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Category')
                            ->schema([
                                Forms\Components\Select::make('publication_category_id')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn(string $state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique('publication_categories', 'slug'),
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
                    ->formatStateUsing(fn ($record) => $record->getTranslation('title', 'en'))
                    ->sortable()
                    ->searchable()
                    ->limit(50, '...'),

                Tables\Columns\TextColumn::make('category.name')
                    ->formatStateUsing(fn ($record) => $record->category?->getTranslation('name', session('locale', 'en')))
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
            ->defaultSort('published_date', 'desc')
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
