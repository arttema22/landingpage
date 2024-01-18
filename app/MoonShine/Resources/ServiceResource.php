<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\Fields\ID;

use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Fields\StackFields;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Services';

    public function indexFields(): array
    {
        return [
            Text::make('sorting')->sortable()->translatable('site'),
            StackFields::make('title')->fields([
                Text::make('name'),
                Text::make(
                    'data',
                    'title',
                    fn ($item) => $item->title . ' /  ' . $item->text
                ),
            ])->translatable('site'),
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
                        Text::make('name')->required(),
                        Flex::make([
                            Text::make('title'),
                            Text::make('text'),
                            Text::make('icon'),
                        ]),
                    ]),
                    Flex::make([
                        Number::make('sorting')->buttons()->customWrapperAttributes(['class' => 'basis-1/2']),
                        Switcher::make('is_publish')->customWrapperAttributes(['class' => 'basis-1/2']),
                    ]),
                ])->columnSpan(8),
                Column::make([
                    Date::make('created_at')->disabled(),
                    Date::make('updated_at')->disabled(),
                    Date::make('deleted_at')->disabled(),
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
