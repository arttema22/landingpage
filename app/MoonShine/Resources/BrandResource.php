<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Brand;
use MoonShine\Fields\ID;

use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

class BrandResource extends ModelResource
{
    protected string $model = Brand::class;

    protected string $title = 'Brands';

    public function indexFields(): array
    {
        return [
            Number::make('sorting')->sortable()
                ->buttons()->updateOnPreview()
                ->translatable('site'),
            Image::make('image')
                ->dir('brand')
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
            //Text::make('moonshine_user_id'),
            Grid::make([
                Column::make([
                    Block::make([
                        Text::make('name')->required()->translatable('site'),
                        Image::make('image')
                            ->dir('brand')
                            ->allowedExtensions(['svg', 'jpg', 'jepeg', 'png', 'gif'])
                            ->removable()
                            ->enableDeleteDir()
                            ->disableDownload()
                            ->translatable('site'),
                    ]),
                    Flex::make([
                        Number::make('sorting')
                            ->buttons()
                            ->customWrapperAttributes(['class' => 'basis-1/2'])
                            ->translatable('site'),
                        Switcher::make('is_publish')
                            ->customWrapperAttributes(['class' => 'basis-1/2'])
                            ->translatable('site'),
                    ]),
                ])->columnSpan(8),
                Column::make([
                    Date::make('created_at')->disabled()->translatable('site'),
                    Date::make('updated_at')->disabled()->translatable('site'),
                    Date::make('deleted_at')->disabled()->translatable('site'),
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
