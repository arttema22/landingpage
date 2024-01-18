<?php

namespace App\View\Components;

use Closure;
use App\Models\Services;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Service extends Component
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
        $services = Services::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        return view('components.service', ['services' => $services]);
    }
}
