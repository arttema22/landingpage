<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Section;
use App\MoonShine\Controllers\HeroController;
use MoonShine\Fields\ID;
use MoonShine\Pages\Page;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Color;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\MoonShineAuth;
use MoonShine\Fields\Preview;
use MoonShine\Decorations\Tab;
use MoonShine\Fields\Password;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Tabs;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Heading;
use MoonShine\TypeCasts\ModelCast;
use MoonShine\Fields\PasswordRepeat;
use MoonShine\Components\FormBuilder;
use MoonShine\Components\FlexibleRender;
use MoonShine\Fields\Hidden;
use MoonShine\Http\Controllers\ProfileController;

class Hero extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title(),
        ];
    }

    public function title(): string
    {
        return __('hero');
    }

    public function fields(): array
    {
        return [
            Hidden::make('id'),
            Text::make('name')->required()
                ->translatable('site'),
            Divider::make(),
            Grid::make([
                Column::make([
                    Tabs::make([
                        Tab::make('content', [
                            Block::make('content', [
                                Json::make('content', 'data.content')
                                    ->fields([
                                        Text::make('title')->translatable('site'),
                                        Textarea::make('text')->translatable('site'),
                                    ])
                                    ->vertical()
                                    ->creatable(false)
                                    ->translatable('site'),
                            ])->translatable('site'),
                            Block::make([
                                Json::make('button', 'data.button')
                                    ->fields([
                                        Text::make('title')->translatable('site'),
                                        Text::make('url')->translatable('site'),
                                    ])
                                    ->creatable(false)
                                    ->translatable('site'),
                            ]),
                            Block::make([
                                Json::make('bage', 'data.bage')
                                    ->fields([
                                        Text::make('title')->translatable('site'),
                                        Text::make('icon')->translatable('site'),
                                    ])
                                    ->creatable(false)
                                    ->translatable('site'),
                            ]),
                            Block::make([
                                Image::make('image')
                                    ->dir('section')
                                    ->allowedExtensions(['svg', 'jpg', 'jepeg', 'png', 'gif'])
                                    ->removable()
                                    ->enableDeleteDir()
                                    ->disableDownload()
                                    ->translatable('site'),
                            ]),
                            Number::make('sorting')
                                ->buttons()
                                ->translatable('site'),
                            Switcher::make('is_publish')
                                ->translatable('site'),
                        ])->translatable('site'),
                        Tab::make('styles', [
                            Select::make('template', 'template')
                                ->options([
                                    1 => 'Информация слева',
                                    2 => 'Информация справа',
                                ])
                                ->default(1)
                                ->translatable('site'),
                            Json::make('style', 'data.style')
                                ->fields([
                                    Color::make('bg')->translatable('site'),
                                    Color::make('content_title_color')->translatable('site'),
                                    Color::make('content_text_color')->translatable('site'),
                                    Color::make('button_text_color')->translatable('site'),
                                    Color::make('button_bg_color')->translatable('site'),
                                    Color::make('bage_text_color')->translatable('site'),
                                    Color::make('bage_bg_color')->translatable('site'),
                                ])
                                ->vertical()
                                ->creatable(false)
                                ->translatable('site'),
                        ])->translatable('site'),
                    ]),
                ])->columnSpan(8),
                Column::make([
                    Preview::make(
                        'help',
                        'help',
                        static fn () => '<b>Заголовком</b> сделайте оффер — вдохновляющую фразу, которая передает суть
                        проекта.
                         Как правило, заголовок более эмоциональный, подзаголовок раскрывает смысл.
<br>
                        <b>Форма или кнопка</b>  — для тех, кто сразу заинтересовался или зашел повторно,
                         можно сразу на обложке добавить целевое действие.'
                    )->translatable('site'),
                ])->columnSpan(4),
            ]),
        ];
    }

    public function components(): array
    {
        return [
            FormBuilder::make(route('hero_update'))
                // ->async()
                // ->customAttributes([
                //     'enctype' => 'multipart/form-data',
                // ])
                ->fields($this->fields())
                ->fillCast(
                    Section::query()->first(),
                    ModelCast::make(Section::class)
                )
                ->submit(__('moonshine::ui.save'), [
                    'class' => 'btn-lg btn-primary',
                ])
                ->name('hero-form'),
        ];
    }
}
