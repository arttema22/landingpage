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
            'name' => 'Герой',
            'image' => 'section/viGQM32G1aE4sHDcCKf8aAniEfTHUtNt9pnlLAQ9.png',
            'is_publish' => 0,
            'sorting' => 1,
        ]);

        Section::create([
            'name' => 'Статистика',
            'is_publish' => 0,
            'sorting' => 2,
        ]);

        Section::create([
            'name' => 'Услуги',
            'is_publish' => 0,
            'sorting' => 3,
        ]);
    }
}
