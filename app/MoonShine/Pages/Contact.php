<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Pages\Page;
use MoonShine\Fields\Text;
use MoonShine\Fields\Email;
use MoonShine\Fields\Phone;
use MoonShine\Decorations\Block;
use Spatie\Valuestore\Valuestore;
use MoonShine\Components\FormBuilder;
use App\MoonShine\Controllers\SettingsController;

class Contact extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Contact';
    }

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('address'),
                Phone::make('phone'),
                Email::make('email'),
            ]),
        ];
    }

    public function components(): array
    {
        $settings = Valuestore::make(storage_path('data/contact_settings.json'));

        return [
            FormBuilder::make(action([SettingsController::class, 'contact_update']))
                ->fields($this->fields())
                ->fill([
                    'address' => $settings->get('address'),
                    'phone' => $settings->get('phone'),
                    'email' => $settings->get('email'),
                ])
        ];
    }

    public function update()
    {
    }
}
