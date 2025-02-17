<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerCareResource\Pages;
use App\Models\CustomerCare;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CustomerCareResource extends Resource
{
    protected static ?string $model = CustomerCare::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Customer Care Management';

    protected static ?string $navigationLabel = 'Customer Care';

    protected static ?string $modelLabel = 'Customer Care';

    protected static ?string $pluralModelLabel = 'Customer Care';

    protected static ?int $navigationSort = 90;

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
                                                        Forms\Components\RichEditor::make('customer_care_subtitle.en')
                                                            ->label('Customer Care Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon1')
                                                                    ->label('Customer Care Icon'),
                                                                Forms\Components\TextInput::make('customer_care_title1.en')
                                                                    ->label('Customer Care Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content1.en')
                                                            ->label('Customer Care Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon2')
                                                                    ->label('Customer Care Icon 2'),
                                                                Forms\Components\TextInput::make('customer_care_title2.en')
                                                                    ->label('Customer Care Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content2.en')
                                                            ->label('Customer Care Content 2 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon3')
                                                                    ->label('Customer Care Icon 3'),
                                                                Forms\Components\TextInput::make('customer_care_title3.en')
                                                                    ->label('Customer Care Title 3 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content3.en')
                                                            ->label('Customer Care Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon4')
                                                                    ->label('Customer Care Icon 4'),
                                                                Forms\Components\TextInput::make('customer_care_title4.en')
                                                                    ->label('Customer Care Title 4 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content4.en')
                                                            ->label('Customer Care Content 4 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon5')
                                                                    ->label('Customer Care Icon 5'),
                                                                Forms\Components\TextInput::make('customer_care_title5.en')
                                                                    ->label('Customer Care Title 5 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content5.en')
                                                            ->label('Customer Care Content 5 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon6')
                                                                    ->label('Customer Care Icon 6'),
                                                                Forms\Components\TextInput::make('customer_care_title6.en')
                                                                    ->label('Customer Care Title 6 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content6.en')
                                                            ->label('Customer Care Content 6 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('customer_care_title.id')
                                                            ->label('Customer Care Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('customer_care_subtitle.id')
                                                            ->label('Customer Care Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon1')
                                                                    ->label('Customer Care Icon'),
                                                                Forms\Components\TextInput::make('customer_care_title1.id')
                                                                    ->label('Customer Care Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content1.id')
                                                            ->label('Customer Care Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon2')
                                                                    ->label('Customer Care Icon 2'),
                                                                Forms\Components\TextInput::make('customer_care_title2.id')
                                                                    ->label('Customer Care Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content2.id')
                                                            ->label('Customer Care Content 2 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon3')
                                                                    ->label('Customer Care Icon 3'),
                                                                Forms\Components\TextInput::make('customer_care_title3.id')
                                                                    ->label('Customer Care Title 3 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content3.id')
                                                            ->label('Customer Care Content 3 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon4')
                                                                    ->label('Customer Care Icon 4'),
                                                                Forms\Components\TextInput::make('customer_care_title4.id')
                                                                    ->label('Customer Care Title 4 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content4.id')
                                                            ->label('Customer Care Content 4 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon5')
                                                                    ->label('Customer Care Icon 5'),
                                                                Forms\Components\TextInput::make('customer_care_title5.id')
                                                                    ->label('Customer Care Title 5 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content5.id')
                                                            ->label('Customer Care Content 5 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('customer_care_icon6')
                                                                    ->label('Customer Care Icon 6'),
                                                                Forms\Components\TextInput::make('customer_care_title6.id')
                                                                    ->label('Customer Care Title 6 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('customer_care_content6.id')
                                                            ->label('Customer Care Content 6 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),


                            ])
                            ->columnSpan(2),


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
            'index' => Pages\ListCustomerCare::route('/'),
            'create' => Pages\CreateCustomerCare::route('/create'),
            'edit' => Pages\EditCustomerCare::route('/{record}/edit'),
        ];
    }
}
