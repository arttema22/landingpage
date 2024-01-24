<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Date;

use MoonShine\Fields\Text;
use App\Models\Testimonial;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Fields\StackFields;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

class TestimonialResource extends ModelResource
{
    protected string $model = Testimonial::class;

    protected string $title = 'Testimonials';

    public function indexFields(): array
    {
        return [
            Number::make('sorting')->sortable()
                ->buttons()->updateOnPreview()
                ->translatable('site'),
            StackFields::make('title')->fields([
                Text::make(
                    'name',
                    'name',
                    fn ($item) => $item->name . ' \ ' . $item->position
                ),
                Text::make('text'),
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
