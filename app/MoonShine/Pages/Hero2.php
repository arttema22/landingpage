<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Section;
use MoonShine\Fields\ID;
use MoonShine\Pages\Page;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\MoonShineAuth;
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
use MoonShine\Http\Controllers\ProfileController;

class Hero2 extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title(),
        ];
    }

    public function title(): string
    {
        return __('hero2');
    }

    public function fields(): array
    {
        return [
            Text::make('name')->required()
                ->translatable('site'),
            Divider::make(),
            Grid::make([
                Column::make([
                    Block::make('content', [
                        Json::make('content', 'data.content')
                            ->fields([
                                Text::make('title')->translatable('site'),
                            ])
                            ->creatable(false)
                            ->translatable('site'),
                        Json::make('content', 'data.content')
                            ->fields([
                                Textarea::make('text')->translatable('site'),
                            ])
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
                ])->columnSpan(8),
                Column::make([
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
                ])->columnSpan(4),
            ]),
        ];
    }

    public function components(): array
    {
        return [
            FormBuilder::make(action([ProfileController::class, 'store']))
                ->async()
                ->customAttributes([
                    'enctype' => 'multipart/form-data',
                ])
                ->fields($this->fields())
                ->fillCast(
                    Section::query()->first(),
                    ModelCast::make(Section::class)
                )
                ->submit(__('moonshine::ui.save'), [
                    'class' => 'btn-lg btn-primary',
                ]),
        ];
    }
}
