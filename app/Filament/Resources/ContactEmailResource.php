<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactEmailResource\Pages;
use App\Models\ContactEmail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ContactEmailResource extends Resource
{
    protected static ?string $model = ContactEmail::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Contact Management';

    protected static ?string $navigationLabel = 'Contact Form';

    protected static ?int $navigationSort = 81;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Footer Translations')
                                    ->schema([
                                        Forms\Components\TextInput::make('destination')
                                            ->label('Email Destination')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('position1.en')
                                                            ->label('Position 1 (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('position2.en')
                                                            ->label('Position 2 (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('position3.en')
                                                            ->label('Position 3 (English)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('name.en')
                                                            ->label('Name (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.en')
                                                            ->label('Email (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('subject.en')
                                                            ->label('Subject (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('message.en')
                                                            ->label('Message (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('startup_category.en')
                                                            ->label('Startup Category (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('company.en')
                                                            ->label('Company (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('problem.en')
                                                            ->label('Problem (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('solution.en')
                                                            ->label('Solution (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                            Forms\Components\TextInput::make('proposition.en')
                                                            ->label('Proposition (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('upload.en')
                                                            ->label('Upload (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('instructions.en')
                                                            ->label('Instructions (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('cancel.en')
                                                            ->label('Cancel (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('submit.en')
                                                            ->label('Submit (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('position1.id')
                                                            ->label('Position 1 (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('position2.id')
                                                            ->label('Position 2 (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('position3.id')
                                                            ->label('Position 3 (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('name.id')
                                                            ->label('Name (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.id')
                                                            ->label('Email (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('subject.id')
                                                            ->label('Subject (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('message.id')
                                                            ->label('Message (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('startup_category.id')
                                                            ->label('Startup Category (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('company.id')
                                                            ->label('Company (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('problem.id')
                                                            ->label('Problem (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('solution.id')
                                                            ->label('Solution (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('proposition.id')
                                                            ->label('Proposition (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('upload.id')
                                                            ->label('Upload (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('instructions.id')
                                                            ->label('Instructions (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('cancel.id')
                                                            ->label('Cancel (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('submit.id')
                                                            ->label('Submit (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                            ]),
                                    ]),
                            ])
                            ->columnSpan(2),
                        Forms\Components\Group::make()
                            ->schema([

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
            'index' => Pages\ListContactEmail::route('/'),
            'create' => Pages\CreateContactEmail::route('/create'),
            'edit' => Pages\EditContactEmail::route('/{record}/edit'),
        ];
    }
}
