<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Section;
use Illuminate\Contracts\Database\Eloquent\Builder;
use MoonShine\Fields\ID;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\Color;
use MoonShine\Fields\Select;

class SectionResource extends ModelResource
{
    protected string $model = Section::class;

    protected string $title = 'sections';

    protected string $sortColumn = 'sorting';

    protected string $sortDirection = 'ASC';

    // public function redirectAfterSave(): string
    // {
    //     return to_page(SectionResource::class);
    // }

    public function getActiveActions(): array
    {
        return ['update'];
    }

    public function query(): Builder
    {
        return parent::query();
    }

    public function indexFields(): array
    {
        return [
            Number::make('sorting')->sortable()
                ->buttons()->updateOnPreview()
                ->translatable('site'),
            Text::make('name')->translatable('site'),
            Switcher::make('is_publish')
                ->updateOnPreview()
                ->translatable('site'),
        ];
    }

    public function formFields(): array
    {
        return [
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
                Column::make([])->columnSpan(4),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
