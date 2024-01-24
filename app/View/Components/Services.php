<?php

namespace App\View\Components;

use Closure;
use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Services extends Component
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
        $services = Service::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        return view('components.services', ['services' => $services]);
    }
}
