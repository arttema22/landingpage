<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Section;
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

class SectionResource extends ModelResource
{
    protected string $model = Section::class;

    protected string $title = 'sections';

    public function getActiveActions(): array
    {
        return ['update'];
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
            Grid::make([
                Column::make([
                    Text::make('name')->required()
                        ->translatable('site'),
                    Divider::make(),
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

    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
