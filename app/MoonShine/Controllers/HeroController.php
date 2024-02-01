<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use App\Models\Section;
use MoonShine\MoonShineRequest;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpFoundation\Response;
use MoonShine\Http\Controllers\MoonShineController;

final class HeroController extends MoonShineController
{
    public function __invoke(MoonShineRequest $request): Response
    {
        $herodata = Section::where('id', $request->Input('id'))->first();

        // dd($request->data['content'][1]['title']);

        $herodata->data = [
            'bage' => [
                1 => [
                    'icon' => $request->data['bage'][1]['icon'],
                    'title' => $request->data['bage'][1]['title'],
                    'color' => $request->data['bage'][1]['color'],
                    'bg_color' => $request->data['bage'][1]['bg_color'],
                ],
            ],
            'content' => [
                1 => [
                    'title' => $request->data['content'][1]['title'],
                    'text' => $request->data['content'][1]['text'],
                    'title_color' => $request->data['content'][1]['title_color'],
                    'text_color' => $request->data['content'][1]['text_color'],
                ],
            ],
            'button' => [
                1 => [
                    'title' => $request->data['button'][1]['title'],
                    'url' => $request->data['button'][1]['url'],
                    'text_color' => $request->data['button'][1]['text_color'],
                    'bg_color' => $request->data['button'][1]['bg_color'],
                ],
            ],
            'style' => [
                1 => [
                    'bg' => $request->data['style'][1]['bg'],
                    'content_title_color' => $request->data['style'][1]['content_title_color'],
                    'content_text_color' => $request->data['style'][1]['content_text_color'],
                    'button_text_color' => $request->data['style'][1]['button_text_color'],
                    'button_bg_color' => $request->data['style'][1]['button_bg_color'],
                    'bage_text_color' => $request->data['style'][1]['bage_text_color'],
                    'bage_bg_color' => $request->data['style'][1]['bage_bg_color'],
                ],
            ],
        ];
        $herodata->save();

        $this->toast('Hello world');

        return back();
    }
}
