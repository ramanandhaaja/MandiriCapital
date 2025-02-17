<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerCareHowResource\Pages;
use App\Models\CustomerCareHow;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CustomerCareHowResource extends Resource
{
    protected static ?string $model = CustomerCareHow::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Customer Care Management';

    protected static ?string $navigationLabel = 'Customer Care How';

    protected static ?string $modelLabel = 'Customer Care How';

    protected static ?string $pluralModelLabel = 'Customer Care How';

    protected static ?int $navigationSort = 91;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([


                                Forms\Components\Section::make('Customer Care')
                                    ->schema([
                                        Forms\Components\Tabs::make('customer_care_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('customer_care_title.en')
                                                            ->label('Customer Care Title (English)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title1.en')
                                                                    ->label('Customer Care Title 1 (English)'),
                                                                Forms\Components\TextInput::make('customer_care_content1')
                                                                    ->label('Customer Care Content 1')
                                                                    ->maxLength(255),
                                                            ]),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title2.en')
                                                                    ->label('Customer Care Title 2 (English)'),
                                                                Forms\Components\TextInput::make('customer_care_content2')
                                                                    ->label('Customer Care Content 2')
                                                                    ->maxLength(255)
                                                            ]),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title3.en')
                                                                    ->label('Customer Care Title 3 (English)'),
                                                                Forms\Components\TextInput::make('customer_care_content3')
                                                                    ->label('Customer Care Content 3')
                                                                    ->maxLength(255)
                                                            ]),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title4.en')
                                                                    ->label('Customer Care Title 4 (English)'),
                                                                Forms\Components\TextInput::make('customer_care_content4')
                                                                    ->label('Customer Care Content 4')
                                                                    ->maxLength(255)
                                                            ]),



                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('customer_care_title.id')
                                                            ->label('Customer Care Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title1.id')
                                                                    ->label('Customer Care Title 1 (Indonesian)'),
                                                                Forms\Components\TextInput::make('customer_care_content1')
                                                                    ->label('Customer Care Content 1')
                                                                    ->maxLength(255)
                                                            ]),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title2.id')
                                                                    ->label('Customer Care Title 2 (Indonesian)'),
                                                                Forms\Components\TextInput::make('customer_care_content2')
                                                                    ->label('Customer Care Content 2')
                                                                    ->maxLength(255)
                                                            ]),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title3.id')
                                                                    ->label('Customer Care Title 3 (Indonesian)'),
                                                                Forms\Components\TextInput::make('customer_care_content3')
                                                                    ->label('Customer Care Content 3')
                                                                    ->maxLength(255)
                                                            ]),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([

                                                                Forms\Components\TextInput::make('customer_care_title4.id')
                                                                    ->label('Customer Care Title 4 (Indonesian)'),
                                                                Forms\Components\TextInput::make('customer_care_content4')
                                                                    ->label('Customer Care Content 4')
                                                                    ->maxLength(255)
                                                            ]),



                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),


                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('customer_care_icon1')
                                    ->label('Customer Care Icon 1')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('customer_care_icon2')
                                    ->label('Customer Care Icon 2')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('customer_care_icon3')
                                    ->label('Customer Care Icon 3')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('customer_care_icon4')
                                    ->label('Customer Care Icon 4')
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

                Tables\Columns\TextColumn::make('customer_care_title')
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
            'index' => Pages\ListCustomerCareHow::route('/'),
            'create' => Pages\CreateCustomerCareHow::route('/create'),
            'edit' => Pages\EditCustomerCareHow::route('/{record}/edit'),
        ];
    }
}
