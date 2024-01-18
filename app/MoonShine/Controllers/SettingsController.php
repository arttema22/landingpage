<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use App\data\Settings;
use MoonShine\MoonShineRequest;
use MoonShine\Http\Controllers\MoonShineController;
use Spatie\Valuestore\Valuestore;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\isEmpty;

final class SettingsController extends MoonShineController
{
    public function contact_update(MoonShineRequest $request)
    {
        $settings = Valuestore::make(storage_path('data/contact_settings.json'));

        if (empty($request->address)) {
            $settings->forget('address');
        } else {
            $settings->put('address', $request->address);
        }
        if (empty($request->phone)) {
            $settings->forget('phone');
        } else {
            $settings->put('phone', $request->phone);
        }
        if (empty($request->email)) {
            $settings->forget('email');
        } else {
            $settings->put('email', $request->email);
        }

        return back();
    }

    public function hero_update(MoonShineRequest $request)
    {
        $settings = Valuestore::make(storage_path('data/hero_settings.json'));

        if (empty($request->hero_title)) {
            $settings->forget('hero_title');
        } else {
            $settings->put('hero_title', $request->hero_title);
        }
        if (empty($request->hero_text)) {
            $settings->forget('hero_text');
        } else {
            $settings->put('hero_text', $request->hero_text);
        }
        if (empty($request->hero_btn_title)) {
            $settings->forget('hero_btn_title');
        } else {
            $settings->put('hero_btn_title', $request->hero_btn_title);
        }
        if (empty($request->hero_btn_url)) {
            $settings->put('hero_btn_url', '#');
        } else {
            $settings->put('hero_btn_url', $request->hero_btn_url);
        }
        if (empty($request->bage_title)) {
            $settings->forget('bage_title');
        } else {
            $settings->put('bage_title', $request->bage_title);
        }
        if (empty($request->bage_icon)) {
            $settings->forget('bage_icon');
        } else {
            $settings->put('bage_icon', $request->bage_icon);
        }
        if (empty($request->image)) {
            $settings->forget('image');
        } else {
            $settings->put('image', $request->image);
        }
        return back();
    }
}
