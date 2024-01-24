<?php

namespace App\View\Components;

use App\Models\Brand as ModelsBrand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Brand extends Component
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
        $brands = ModelsBrand::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        return view('components.brand', ['brands' => $brands]);
    }
}
