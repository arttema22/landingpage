<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;

class HomeController extends Controller
{
    public function index()
    {
        $sets = Section::where('is_publish', 1)
            ->orderBy('sorting')
            ->get();

        $settings = Valuestore::make(storage_path('data/contact_settings.json'));

        return view('home', ['settings' => $settings, 'sets' => $sets]);
    }
}
