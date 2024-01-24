<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Fields\Url;
use MoonShine\Pages\Page;
use MoonShine\Fields\Text;
use MoonShine\Fields\Color;
use MoonShine\Fields\Email;
use MoonShine\Fields\Image;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Grid;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use Spatie\Valuestore\Valuestore;
use MoonShine\Components\FormBuilder;
use App\MoonShine\Controllers\SettingsController;

class Hero extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Hero';
    }

    public function fields(): array
    {
        return [
            Grid::make([
                Column::make([
                    Block::make('main', [
                        Text::make('hero_title'),
                        Textarea::make('hero_text'),
                        Color::make('bg_color')->translatable('site'),
                    ])->translatable('site'),
                    Block::make('button', [
                        Text::make('hero_btn_title'),
                        Text::make('hero_btn_url'),
                    ])->translatable('site'),
                    Block::make('bage', [
                        Text::make('bage_title'),
                        Text::make('bage_icon'),
                    ])->translatable('site'),
                ])->columnSpan(8),
                Column::make([
                    Preview::make(
                        'help',
                        'help',
                        static fn () => '<b>Заголовком</b> сделайте оффер — вдохновляющую фразу, которая передает суть
                        проекта.
                         Как правило, заголовок более эмоциональный, подзаголовок раскрывает смысл.
<br>
                        <b>Форма или кнопка</b>  — для тех, кто сразу заинтересовался или зашел повторно,
                         можно сразу на обложке добавить целевое действие.'
                    )->translatable('site'),

                ])->columnSpan(4),
            ]),
        ];
    }

    public function components(): array
    {
        $settings = Valuestore::make(storage_path('data/hero_settings.json'));

        return [
            FormBuilder::make(action([SettingsController::class, 'hero_update']))
                ->fields($this->fields())
                ->fill([
                    'hero_title' => $settings->get('hero_title'),
                    'hero_text' => $settings->get('hero_text'),
                    'hero_btn_title' => $settings->get('hero_btn_title'),
                    'hero_btn_url' => $settings->get('hero_btn_url'),
                    'bage_title' => $settings->get('bage_title'),
                    'bage_icon' => $settings->get('bage_icon'),
                    'bg_color' => $settings->get('bg_color'),
                ]),
        ];
    }
}
