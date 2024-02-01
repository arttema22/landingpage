<?php

use App\MoonShine\Controllers\HeroController;
use Illuminate\Support\Facades\Route;



Route::post('/test', [HeroController::class, '__invoke'])->name('hero_update');
