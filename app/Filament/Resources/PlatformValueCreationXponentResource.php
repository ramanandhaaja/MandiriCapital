<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformValueCreationXponentResource\Pages;
use App\Models\PlatformValueCreationXponent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformValueCreationXponentResource extends Resource
{
    protected static ?string $model = PlatformValueCreationXponent::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Value Creation Xponent Program';

    protected static ?string $modelLabel = 'Value Creation Xponent Program';

    protected static ?string $pluralModelLabel = 'Value Creation Xponent Program';

    protected static ?int $navigationSort = 44;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Tabs::make('content_translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\RichEditor::make('hero_text.en')
                                                    ->label('Content Frontpage (English)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                                Forms\Components\RichEditor::make('headline.en')
                                                    ->label('Headline (English)')
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\RichEditor::make('hero_text.id')
                                                    ->label('Content Frontpage (Indonesian)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                                Forms\Components\RichEditor::make('headline.id')
                                                    ->label('Headline (Indonesian)')
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                            ]),
                                    ])->columnSpanFull(),

                                Forms\Components\Section::make('Counter')
                                    ->schema([
                                        Forms\Components\Tabs::make('counter_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('counter1_title.en')
                                                                    ->label('Counter 1 (English)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('counter1_value.en')
                                                                    ->label('Counter 1 Value (English)')
                                                                    ->required()
                                                                    ->maxLength(255),
                                                            ]),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('counter2_title.en')
                                                                    ->label('Counter 2 (English)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('counter2_value.en')
                                                                    ->label('Counter 2 Value (English)')
                                                                    ->required()
                                                                    ->maxLength(255),
                                                            ]),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('counter3_title.en')
                                                                    ->label('Counter 3 (English)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('counter3_value.en')
                                                                    ->label('Counter 3 Value (English)')
                                                                    ->required()
                                                                    ->maxLength(255),
                                                            ]),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('counter1_title.id')
                                                                    ->label('Counter 1 (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('counter1_value.id')
                                                                    ->label('Counter 1 Value (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),
                                                            ]),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('counter2_title.id')
                                                                    ->label('Counter 2 (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('counter2_value.id')
                                                                    ->label('Counter 2 Value (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),
                                                            ]),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('counter3_title.id')
                                                                    ->label('Counter 3 (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('counter3_value.id')
                                                                    ->label('Counter 3 Value (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),
                                                            ]),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                Forms\Components\Section::make('Why Exponent')
                                    ->schema([
                                        Forms\Components\Tabs::make('whyexponent_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('whyexponent_title.en')
                                                            ->label('Why Exponent Title (English)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('whyexponent_subtitle.en')
                                                            ->label('Why Exponent Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon1')
                                                                    ->label('Why Exponent Icon'),
                                                                Forms\Components\TextInput::make('whyexponent_title1.en')
                                                                    ->label('Why Exponent Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content1.en')
                                                            ->label('Why Exponent Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon2')
                                                                    ->label('Why Exponent Icon 2'),
                                                                Forms\Components\TextInput::make('whyexponent_title2.en')
                                                                    ->label('Why Exponent Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content2.en')
                                                            ->label('Why Exponent Content 2 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon3')
                                                                    ->label('Why Exponent Icon 3'),
                                                                Forms\Components\TextInput::make('whyexponent_title3.en')
                                                                    ->label('Why Exponent Title 3 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content3.en')
                                                            ->label('Why Exponent Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon4')
                                                                    ->label('Why Exponent Icon 4'),
                                                                Forms\Components\TextInput::make('whyexponent_title4.en')
                                                                    ->label('Why Exponent Title 4 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content4.en')
                                                            ->label('Why Exponent Content 4 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon5')
                                                                    ->label('Why Exponent Icon 5'),
                                                                Forms\Components\TextInput::make('whyexponent_title5.en')
                                                                    ->label('Why Exponent Title 5 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content5.en')
                                                            ->label('Why Exponent Content 5 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon6')
                                                                    ->label('Why Exponent Icon 6'),
                                                                Forms\Components\TextInput::make('whyexponent_title6.en')
                                                                    ->label('Why Exponent Title 6 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content6.en')
                                                            ->label('Why Exponent Content 6 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('whyexponent_title.id')
                                                            ->label('Why Exponent Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('whyexponent_subtitle.id')
                                                            ->label('Why Exponent Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon1')
                                                                    ->label('Why Exponent Icon'),
                                                                Forms\Components\TextInput::make('whyexponent_title1.id')
                                                                    ->label('Why Exponent Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content1.id')
                                                            ->label('Why Exponent Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon2')
                                                                    ->label('Why Exponent Icon 2'),
                                                                Forms\Components\TextInput::make('whyexponent_title2.id')
                                                                    ->label('Why Exponent Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content2.id')
                                                            ->label('Why Exponent Content 2 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon3')
                                                                    ->label('Why Exponent Icon 3'),
                                                                Forms\Components\TextInput::make('whyexponent_title3.id')
                                                                    ->label('Why Exponent Title 3 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content3.id')
                                                            ->label('Why Exponent Content 3 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon4')
                                                                    ->label('Why Exponent Icon 4'),
                                                                Forms\Components\TextInput::make('whyexponent_title4.id')
                                                                    ->label('Why Exponent Title 4 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content4.id')
                                                            ->label('Why Exponent Content 4 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon5')
                                                                    ->label('Why Exponent Icon 5'),
                                                                Forms\Components\TextInput::make('whyexponent_title5.id')
                                                                    ->label('Why Exponent Title 5 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content5.id')
                                                            ->label('Why Exponent Content 5 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('whyexponent_icon6')
                                                                    ->label('Why Exponent Icon 6'),
                                                                Forms\Components\TextInput::make('whyexponent_title6.id')
                                                                    ->label('Why Exponent Title 6 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyexponent_content6.id')
                                                            ->label('Why Exponent Content 6 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                Forms\Components\Section::make('Inside Exponent')
                                    ->schema([
                                        Forms\Components\Tabs::make('insideexponent_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('insideexponent_title.en')
                                                            ->label('Inside Exponent Title (English)')
                                                            ->columnSpanFull()
                                                            ->maxLength(255),

                                                        Forms\Components\RichEditor::make('insideexponent_subtitle.en')
                                                            ->label('Inside Exponent Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('insideexponent_icon1')
                                                                    ->label('Inside Exponent Icon 1'),
                                                                Forms\Components\TextInput::make('insideexponent_title1.en')
                                                                    ->label('Inside Exponent Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insideexponent_content1.en')
                                                            ->label('Inside Exponent Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('insideexponent_icon2')
                                                                    ->label('Inside Exponent Icon 2'),
                                                                Forms\Components\TextInput::make('insideexponent_title2.en')
                                                                    ->label('Inside Exponent Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insideexponent_content2.en')
                                                            ->label('Inside Exponent Content 2 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('insideexponent_title.id')
                                                            ->label('Inside Exponent Title (Indonesian)')
                                                            ->columnSpanFull()
                                                            ->maxLength(255),

                                                        Forms\Components\RichEditor::make('insideexponent_subtitle.id')
                                                            ->label('Inside Exponent Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('insideexponent_icon1')
                                                                    ->label('Inside Exponent Icon 1'),
                                                                Forms\Components\TextInput::make('insideexponent_title1.id')
                                                                    ->label('Inside Exponent Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insideexponent_content1.id')
                                                            ->label('Inside Exponent Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('insideexponent_icon2')
                                                                    ->label('Inside Exponent Icon 2'),
                                                                Forms\Components\TextInput::make('insideexponent_title2.id')
                                                                    ->label('Inside Exponent Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insideexponent_content2.id')
                                                            ->label('Inside Exponent Content 2 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                Forms\Components\Section::make('Testimonial Exponent')
                                    ->schema([
                                        Forms\Components\Tabs::make('testimonialexponent_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('testimonialexponent_title.en')
                                                            ->label('Testimonial Exponent Title (English)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('testimonialexponent_subtitle.en')
                                                            ->label('Testimonial Exponent Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialexponent_logo1')
                                                            ->label('Testimonial Exponent Logo 1')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder1')
                                                                    ->label('Testimonial Exponent Founder 1'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title1.en')
                                                                    ->label('Testimonial Exponent Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content1.en')
                                                            ->label('Testimonial Exponent Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialexponent_logo2')
                                                            ->label('Testimonial Exponent Logo 2')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder2')
                                                                    ->label('Testimonial Exponent Founder 2'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title2.en')
                                                                    ->label('Testimonial Exponent Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content2.en')
                                                            ->label('Testimonial Exponent Content 2 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialexponent_logo3')
                                                            ->label('Testimonial Exponent Logo 3')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder3')
                                                                    ->label('Testimonial Exponent Founder 3'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title3.en')
                                                                    ->label('Testimonial Exponent Title 3 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content3.en')
                                                            ->label('Testimonial Exponent Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),



                                                            Forms\Components\FileUpload::make('testimonialexponent_logo4')
                                                            ->label('Testimonial Exponent Logo 4')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder4')
                                                                    ->label('Testimonial Exponent Founder 4'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title4.en')
                                                                    ->label('Testimonial Exponent Title 4 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content4.en')
                                                            ->label('Testimonial Exponent Content 4 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),



                                                            Forms\Components\FileUpload::make('testimonialexponent_logo5')
                                                            ->label('Testimonial Exponent Logo 5')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder5')
                                                                    ->label('Testimonial Exponent Founder 5'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title5.en')
                                                                    ->label('Testimonial Exponent Title 5 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content5.en')
                                                            ->label('Testimonial Exponent Content 5 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),




                                                            Forms\Components\FileUpload::make('testimonialexponent_logo6')
                                                            ->label('Testimonial Exponent Logo 6')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder6')
                                                                    ->label('Testimonial Exponent Founder 6'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title6.en')
                                                                    ->label('Testimonial Exponent Title 6 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content6.en')
                                                            ->label('Testimonial Exponent Content 6 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('testimonialexponent_title.id')
                                                            ->label('Testimonial Exponent Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('testimonialexponent_subtitle.id')
                                                            ->label('Testimonial Exponent Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialexponent_logo1')
                                                            ->label('Testimonial Exponent Logo 1')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder1')
                                                                    ->label('Testimonial Exponent Founder 1'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title1.id')
                                                                    ->label('Testimonial Exponent Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content1.id')
                                                            ->label('Testimonial Exponent Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialexponent_logo2')
                                                            ->label('Testimonial Exponent Logo 2')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder2')
                                                                    ->label('Testimonial Exponent Founder 2'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title2.id')
                                                                    ->label('Testimonial Exponent Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content2.id')
                                                            ->label('Testimonial Exponent Content 2 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialexponent_logo3')
                                                            ->label('Testimonial Exponent Logo 3')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder3')
                                                                    ->label('Testimonial Exponent Founder 3'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title3.id')
                                                                    ->label('Testimonial Exponent Title 3 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content3.id')
                                                            ->label('Testimonial Exponent Content 3 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),


                                                        Forms\Components\FileUpload::make('testimonialexponent_logo4')
                                                            ->label('Testimonial Exponent Logo 4')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder4')
                                                                    ->label('Testimonial Exponent Founder 4'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title4.id')
                                                                    ->label('Testimonial Exponent Title 4 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content4.id')
                                                            ->label('Testimonial Exponent Content 4 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),



                                                        Forms\Components\FileUpload::make('testimonialexponent_logo5')
                                                            ->label('Testimonial Exponent Logo 5')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder5')
                                                                    ->label('Testimonial Exponent Founder 5'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title5.id')
                                                                    ->label('Testimonial Exponent Title 5 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content5.id')
                                                            ->label('Testimonial Exponent Content 5 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),



                                                        Forms\Components\FileUpload::make('testimonialexponent_logo6')
                                                            ->label('Testimonial Exponent Logo 6')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialexponent_founder6')
                                                                    ->label('Testimonial Exponent Founder 6'),
                                                                Forms\Components\TextInput::make('testimonialexponent_title6.id')
                                                                    ->label('Testimonial Exponent Title 6 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialexponent_content6.id')
                                                            ->label('Testimonial Exponent Content 6 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                    Forms\Components\Section::make('Footer')
                                    ->schema([
                                    Forms\Components\Tabs::make('footer_translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\TextInput::make('footer_text.en')
                                                    ->label('Footer Text (English)')
                                                    ->maxLength(255)
                                                    ->columnSpanFull(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\TextInput::make('footer_text.id')
                                                    ->label('Footer Text (Indonesian)')
                                                    ->maxLength(255)
                                                    ->columnSpanFull(),
                                            ]),
                                    ])->columnSpanFull(),
                                    ])->columns(2),

                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('hero_image')
                                    ->required()
                                    ->label('Hero Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('hero_background')
                                    ->required()
                                    ->label('Hero Background')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path1')
                                    ->label('Mid Section Image 1')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path2')
                                    ->label('Mid Section Image 2')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path3')
                                    ->label('Mid Section Image 3')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path4')
                                    ->label('Mid Section Image 4')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path5')
                                    ->label('Mid Section Image 5')
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
            'index' => Pages\ListPlatformValueCreationXponent::route('/'),
            'create' => Pages\CreatePlatformValueCreationXponent::route('/create'),
            'edit' => Pages\EditPlatformValueCreationXponent::route('/{record}/edit'),
        ];
    }
}
