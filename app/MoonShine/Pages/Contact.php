<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Components\FormBuilder;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Email;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Text;
use MoonShine\Pages\Page;

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

    public function components(): array
    {
        return [
            FormBuilder::make(
                action: 'contact/save',
                method: 'POST',
                fields: [
                    Block::make([
                        Text::make('address'),
                        Phone::make('phone'),
                        Email::make('email'),
                    ]),

                ],
                values: [
                    'address' => 'Value',
                    'phone' => 'Value',
                    'email' => 'alue@ttt.ru',
                ],
            ),
        ];
    }

    public function save()
    {
    }
}
