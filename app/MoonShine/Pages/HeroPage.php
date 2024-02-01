<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\FormPage;

class HeroPage extends FormPage
{
    public function fields(): array
    {
        return [
            Text::make('test'),
        ];
    }

    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
