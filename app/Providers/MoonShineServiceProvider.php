<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Section;
use App\MoonShine\Pages\Contact;
use App\MoonShine\Pages\Hero;
use App\MoonShine\Pages\Hero2;
use App\MoonShine\Pages\TestPage;
use App\MoonShine\Resources\BrandResource;
use App\MoonShine\Resources\FaqResource;
use App\MoonShine\Resources\HeroResource;
use App\MoonShine\Resources\SectionResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\StatisticResource;
use App\MoonShine\Resources\TeamResource;
use App\MoonShine\Resources\TestimonialResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make('sections', new SectionResource)
                ->icon('heroicons.outline.bars-3')
                ->translatable('site'),

            MenuGroup::make('first_screen', [

                // MenuItem::make('hero-new', new HeroResource)
                //     ->icon('heroicons.outline.bars-3')
                //     ->translatable('site'),


                MenuItem::make('hero2', Hero2::make('hero_section2', 'hero2'))
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
                MenuItem::make('hero', Hero::make('hero_section', 'hero'))
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
                MenuItem::make('contact', Contact::make('contact_section', 'contact'))
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
            ])->translatable('site'),

            MenuGroup::make('about', [
                MenuItem::make('statistic', new StatisticResource)
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
                MenuItem::make('services', new ServiceResource)
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
            ])->translatable('site'),

            MenuGroup::make('clear_benefits', [])->translatable('site'),

            MenuGroup::make('trust_block', [
                MenuItem::make('team', new TeamResource)
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
                MenuItem::make('brand', new BrandResource)
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
                MenuItem::make('testimonials', new TestimonialResource)
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
                MenuItem::make('faq', new FaqResource)
                    ->icon('heroicons.outline.bars-3')
                    ->translatable('site'),
            ])->translatable('site'),

            MenuGroup::make('target_action', [])->translatable('site'),

            MenuGroup::make(static fn () => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn () => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn () => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
