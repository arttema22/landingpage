<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Team;
use MoonShine\Fields\ID;

use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Fields\StackFields;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

class TeamResource extends ModelResource
{
    protected string $model = Team::class;

    protected string $title = 'Teams';

    public function indexFields(): array
    {
        return [
            Number::make('sorting')->sortable()
                ->buttons()->updateOnPreview()
                ->translatable('site'),
            Image::make('photo')
                ->dir('team')
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
                        Flex::make([
                            Text::make('name')->required()->translatable('site'),
                            Text::make('position')->translatable('site'),
                        ]),
                        Textarea::make('text')->required()->translatable('site'),
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
                    Block::make([
                        Image::make('photo')
                            ->dir('team')
                            ->allowedExtensions(['jpg', 'jepeg', 'png', 'gif'])
                            ->removable()
                            ->enableDeleteDir()
                            ->disableDownload()
                            ->translatable('site'),
                    ]),
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
