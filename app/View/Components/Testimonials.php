<?php

namespace App\View\Components;

use Closure;
use App\Models\Testimonial;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Testimonials extends Component
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
        $testimonials = Testimonial::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        return view('components.testimonials', ['testimonials' => $testimonials]);
    }
}
