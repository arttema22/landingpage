<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Spatie\Valuestore\Valuestore;
use Illuminate\Contracts\View\View;

class Hero extends Component
{
    public $set;

    /**
     * Create a new component instance.
     */
    public function __construct($set)
    {
        $this->set = $set;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $settings = Valuestore::make(storage_path('data/hero_settings.json'));

        return view('components.hero', ['settings' => $settings]);
    }
}
