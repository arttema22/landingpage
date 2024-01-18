<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Pages\Contact;
use App\MoonShine\Pages\Hero;
use App\MoonShine\Pages\TestPage;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\StatisticResource;
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
            MenuItem::make('contact', Contact::make('contact_section', 'contact'))
                ->icon('heroicons.outline.bars-3')
                ->translatable('site'),
            MenuItem::make('hero', Hero::make('hero_section', 'hero'))
                ->icon('heroicons.outline.bars-3')
                ->translatable('site'),
            MenuItem::make('statistic', new StatisticResource)
                ->icon('heroicons.outline.bars-3')
                ->translatable('site'),
            MenuItem::make('services', new ServiceResource)
                ->icon('heroicons.outline.bars-3')
                ->translatable('site'),

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
