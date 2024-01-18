<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use App\Models\Statistic;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Date;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;

class StatisticResource extends ModelResource
{
    protected string $model = Statistic::class;

    protected string $title = 'Statistics';

    public function indexFields(): array
    {
        return [
            Text::make('sorting')->sortable(),
            // ID::make()->sortable(),
            // Text::make('moonshine_user_id'),
            Text::make('name'),
            Text::make('data'),
            Text::make('text'),
            Text::make('is_publish'),
            // Text::make('created_at'),
            // Text::make('updated_at'),
            // Text::make('deleted_at'),
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('moonshine_user_id'),
            Text::make('name')->required(),
            Text::make('data'),
            Text::make('text'),
            Switcher::make('is_publish'),
            Number::make('sorting'),
            Date::make('created_at'),
            Date::make('updated_at'),
            Date::make('deleted_at'),
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
