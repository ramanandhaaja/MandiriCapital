<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformValueCreationZenithResource\Pages;
use App\Models\PlatformValueCreationZenith;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformValueCreationZenithResource extends Resource
{
    protected static ?string $model = PlatformValueCreationZenith::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Value Creation Zenith Program';

    protected static ?string $modelLabel = 'Value Creation Zenith Program';

    protected static ?string $pluralModelLabel = 'Value Creation Zenith Program';

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



                                Forms\Components\Section::make('Why Zenith')
                                    ->schema([
                                        Forms\Components\Tabs::make('whyzenith_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('whyzenith_title.en')
                                                            ->label('Why Zenith Title (English)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('whyzenith_subtitle.en')
                                                            ->label('Why Zenith Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon1')
                                                                    ->label('Why Zenith Icon 1')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title1.en')
                                                                    ->label('Why Zenith Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content1.en')
                                                            ->label('Why Zenith Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon2')
                                                                    ->label('Why Zenith Icon 2')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title2.en')
                                                                    ->label('Why Zenith Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content2.en')
                                                            ->label('Why Zenith Content 2 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon3')
                                                                    ->label('Why Zenith Icon 3')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title3.en')
                                                                    ->label('Why Zenith Title 3 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content3.en')
                                                            ->label('Why Zenith Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon4')
                                                                    ->label('Why Zenith Icon 4')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title4.en')
                                                                    ->label('Why Zenith Title 4 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content4.en')
                                                            ->label('Why Zenith Content 4 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon5')
                                                                    ->label('Why Zenith Icon 5')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title5.en')
                                                                    ->label('Why Zenith Title 5 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content5.en')
                                                            ->label('Why Zenith Content 5 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon6')
                                                                    ->label('Why Zenith Icon 6')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title6.en')
                                                                    ->label('Why Zenith Title 6 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content6.en')
                                                            ->label('Why Zenith Content 6 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('whyzenith_title.id')
                                                            ->label('Why Zenith Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('whyzenith_subtitle.id')
                                                            ->label('Why Zenith Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon1')
                                                                    ->label('Why Zenith Icon 1')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title1.id')
                                                                    ->label('Why Zenith Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content1.id')
                                                            ->label('Why Zenith Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon2')
                                                                    ->label('Why Zenith Icon 2')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title2.id')
                                                                    ->label('Why Zenith Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content2.id')
                                                            ->label('Why Zenith Content 2 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon3')
                                                                    ->label('Why Zenith Icon 3')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title3.id')
                                                                    ->label('Why Zenith Title 3 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content3.id')
                                                            ->label('Why Zenith Content 3 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon4')
                                                                    ->label('Why Zenith Icon 4')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title4.id')
                                                                    ->label('Why Zenith Title 4 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content4.id')
                                                            ->label('Why Zenith Content 4 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon5')
                                                                    ->label('Why Zenith Icon 5')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title5.id')
                                                                    ->label('Why Zenith Title 5 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content5.id')
                                                            ->label('Why Zenith Content 5 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('whyzenith_icon6')
                                                                    ->label('Why Zenith Icon 6')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('whyzenith_title6.id')
                                                                    ->label('Why Zenith Title 6 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('whyzenith_content6.id')
                                                            ->label('Why Zenith Content 6 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                Forms\Components\Section::make('Inside Zenith')
                                    ->schema([
                                        Forms\Components\Tabs::make('insidezenith_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('insidezenith_title.en')
                                                            ->label('Inside Zenith Title (English)')
                                                            ->columnSpanFull()
                                                            ->maxLength(255),

                                                        Forms\Components\RichEditor::make('insidezenith_subtitle.en')
                                                            ->label('Inside Zenith Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('insidezenith_icon1')
                                                                    ->label('Inside Zenith Icon 1')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('insidezenith_title1.en')
                                                                    ->label('Inside Zenith Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insidezenith_content1.en')
                                                            ->label('Inside Zenith Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('insidezenith_icon2')
                                                                    ->label('Inside Zenith Icon 2')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('insidezenith_title2.en')
                                                                    ->label('Inside Zenith Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insidezenith_content3.en')
                                                            ->label('Inside Zenith Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('insidezenith_icon3')
                                                                    ->label('Inside Zenith Icon 3')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('insidezenith_title3.en')
                                                                    ->label('Inside Zenith Title 3 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insidezenith_content3.en')
                                                            ->label('Inside Zenith Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('insidezenith_title.id')
                                                            ->label('Inside Zenith Title (Indonesian)')
                                                            ->columnSpanFull()
                                                            ->maxLength(255),

                                                        Forms\Components\RichEditor::make('insidezenith_subtitle.id')
                                                            ->label('Inside Zenith Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('insidezenith_icon1')
                                                                    ->label('Inside Zenith Icon 1')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('insidezenith_title1.id')
                                                                    ->label('Inside Zenith Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insidezenith_content1.id')
                                                            ->label('Inside Zenith Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('insidezenith_icon2')
                                                                    ->label('Inside Zenith Icon 2')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('insidezenith_title2.id')
                                                                    ->label('Inside Zenith Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insidezenith_content3.id')
                                                            ->label('Inside Zenith Content 3 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('insidezenith_icon3')
                                                                    ->label('Inside Zenith Icon 3')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\TextInput::make('insidezenith_title3.id')
                                                                    ->label('Inside Zenith Title 3 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('insidezenith_content3.id')
                                                            ->label('Inside Zenith Content 3 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                Forms\Components\Section::make('Business Deal')
                                    ->schema([
                                        Forms\Components\Tabs::make('businessdeal_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('deal_title.en')
                                                            ->label('Business Deal Title (English)')
                                                            ->columnSpanFull()
                                                            ->maxLength(255),
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('deal_image_path1')
                                                                    ->label('Business Deal Image 1')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path2')
                                                                    ->label('Business Deal Image 2')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path3')
                                                                    ->label('Business Deal Image 3')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path4')
                                                                    ->label('Business Deal Image 4')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path5')
                                                                    ->label('Business Deal Image 5')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path6')
                                                                    ->label('Business Deal Image 6')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                            ]),

                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('deal_title.id')
                                                            ->label('Business Deal Title (Indonesian)')
                                                            ->columnSpanFull()
                                                            ->maxLength(255),


                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\FileUpload::make('deal_image_path1')
                                                                    ->label('Business Deal Image 1')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path2')
                                                                    ->label('Business Deal Image 2')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path3')
                                                                    ->label('Business Deal Image 3')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path4')
                                                                    ->label('Business Deal Image 4')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path5')
                                                                    ->label('Business Deal Image 5')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                                Forms\Components\FileUpload::make('deal_image_path6')
                                                                    ->label('Business Deal Image 6')
                                                                    ->image()
                                                                    ->disk('public')
                                                                    ->directory('platforms')
                                                                    ->visibility('public'),
                                                            ]),

                                                    ]),
                                            ])->columnSpanFull(),
                                    ])->columns(2),

                                Forms\Components\Section::make('Testimonial Zenith')
                                    ->schema([
                                        Forms\Components\Tabs::make('testimonialzenith_translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('testimonialzenith_title.en')
                                                            ->label('Testimonial Zenith Title (English)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('testimonialzenith_subtitle.en')
                                                            ->label('Testimonial Zenith Subtitle (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialzenith_logo1')
                                                            ->label('Testimonial Zenith Logo 1')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialzenith_founder1')
                                                                    ->label('Testimonial Zenith Founder 1'),
                                                                Forms\Components\TextInput::make('testimonialzenith_title1.en')
                                                                    ->label('Testimonial Zenith Title 1 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialzenith_content1.en')
                                                            ->label('Testimonial Zenith Content 1 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialzenith_logo2')
                                                            ->label('Testimonial Zenith Logo 2')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialzenith_founder2')
                                                                    ->label('Testimonial Zenith Founder 2'),
                                                                Forms\Components\TextInput::make('testimonialzenith_title2.en')
                                                                    ->label('Testimonial Zenith Title 2 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialzenith_content2.en')
                                                            ->label('Testimonial Zenith Content 2 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialzenith_logo3')
                                                            ->label('Testimonial Zenith Logo 3')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialzenith_founder3')
                                                                    ->label('Testimonial Zenith Founder 3'),
                                                                Forms\Components\TextInput::make('testimonialzenith_title3.en')
                                                                    ->label('Testimonial Zenith Title 3 (English)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialzenith_content3.en')
                                                            ->label('Testimonial Zenith Content 3 (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('testimonialzenith_title.id')
                                                            ->label('Testimonial Zenith Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('testimonialzenith_subtitle.id')
                                                            ->label('Testimonial Zenith Subtitle (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialzenith_logo1')
                                                            ->label('Testimonial Zenith Logo 1')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialzenith_founder1')
                                                                    ->label('Testimonial Zenith Founder 1'),
                                                                Forms\Components\TextInput::make('testimonialzenith_title1.id')
                                                                    ->label('Testimonial Zenith Title 1 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialzenith_content1.id')
                                                            ->label('Testimonial Zenith Content 1 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialzenith_logo2')
                                                            ->label('Testimonial Zenith Logo 2')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialzenith_founder2')
                                                                    ->label('Testimonial Zenith Founder 2'),
                                                                Forms\Components\TextInput::make('testimonialzenith_title2.id')
                                                                    ->label('Testimonial Zenith Title 2 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialzenith_content2.id')
                                                            ->label('Testimonial Zenith Content 2 (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\FileUpload::make('testimonialzenith_logo3')
                                                            ->label('Testimonial Zenith Logo 3')
                                                            ->image()
                                                            ->disk('public')
                                                            ->directory('platforms')
                                                            ->visibility('public')
                                                            ->columnSpanFull(),

                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('testimonialzenith_founder3')
                                                                    ->label('Testimonial Zenith Founder 3'),
                                                                Forms\Components\TextInput::make('testimonialzenith_title3.id')
                                                                    ->label('Testimonial Zenith Title 3 (Indonesian)'),
                                                            ]),
                                                        Forms\Components\RichEditor::make('testimonialzenith_content3.id')
                                                            ->label('Testimonial Zenith Content 3 (Indonesian)')
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
                                Forms\Components\FileUpload::make('image_path1')
                                    ->label('Mid Section Video 1')
                                    ->acceptedFileTypes(['image/*', 'video/*'])
                                    ->maxSize(50 * 1024) // 50MB max file size
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path2')
                                    ->label('Mid Section Image 1')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path3')
                                    ->label('Mid Section Image 2')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path4')
                                    ->label('Mid Section Image 3')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path5')
                                    ->label('Mid Section Image 4')
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
            'index' => Pages\ListPlatformValueCreationZenith::route('/'),
            'create' => Pages\CreatePlatformValueCreationZenith::route('/create'),
            'edit' => Pages\EditPlatformValueCreationZenith::route('/{record}/edit'),
        ];
    }
}
