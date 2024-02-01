<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'system_id' => '111',
            'name' => 'Герой',
            'template' => '1',
            'image' => 'section/viGQM32G1aE4sHDcCKf8aAniEfTHUtNt9pnlLAQ9.png',
            'data' => [
                'bage' => [
                    0 => [
                        'icon' => 'ri-heart-pulse-line',
                        'title' => 'Live your life',
                        'color' => '#ff0000',
                        'bg_color' => '#0000ff',
                    ],
                ],
                'content' => [
                    0 => [
                        'title' => 'We care about your health',
                        'text' => 'Lorem ipsum consectetur adipisicing elit. Quaerat dolorum impedit tenetur, minus alias eum molestias molestiae est consequatur. Soluta, pariatur mollitia.',
                        'title_color' => '#ff0000',
                        'text_color' => '#ffff00',
                    ],
                ],
                'button' => [
                    0 => [
                        'title' => 'Contat us',
                        'url' => '#',
                        'text_color' => '#ff0000',
                        'bg_color' => '#ffff00',
                    ],
                ],
                'style' => [
                    0 => [
                        'bg' => '#ff0000',
                        'content_title_color' => '#ff0000',
                        'content_text_color' => '#ff0000',
                        'button_text_color' => '#ff0000',
                        'button_bg_color' => '#ff0000',
                        'bage_text_color' => '#ff0000',
                        'bage_bg_color' => '#ff0000',
                    ],
                ],
            ],
            'is_publish' => 1,
            'sorting' => 1,
        ]);
    }
}
