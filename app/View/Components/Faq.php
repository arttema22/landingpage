<?php

namespace App\View\Components;

use App\Models\Faq as ModelsFaq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
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
        $faqs = ModelsFaq::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        return view('components.faq', ['faqs' => $faqs]);
    }
}
