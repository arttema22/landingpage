<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\MoonShine\Controllers\SettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('landing');
// });

Route::post('/contact-settings', [SettingsController::class, 'contact_update'])->name('contact_update');
Route::post('/hero-settings', [SettingsController::class, 'hero_update'])->name('hero_update');
