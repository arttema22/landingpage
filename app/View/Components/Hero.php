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
        switch ($this->set['template']) {
            case 1:
                return view('components.hero.01.hero_l');
            case 2:
                return view('components.hero.01.hero_r');
            default:
                return view('components.hero.01.hero_l');
        }
    }
}
