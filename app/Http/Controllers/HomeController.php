<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Valuestore::make(storage_path('data/contact_settings.json'));
        return view('home', ['settings' => $settings]);
    }
}
