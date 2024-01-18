<?php

namespace App\View\Components;

use App\Models\Statistic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Stats extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = Statistic::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        return view('components.stats', ['data' => $data]);
    }
}
