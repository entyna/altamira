<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $infoboxHeading = Content::where('key', 'infobox-heading')
            ->where('lang', 'cs')
            ->first();

        $infoboxText = Content::where('key', 'infobox-text')
            ->where('lang', 'cs')
            ->first();

        $infoboxVisible = Setting::where('key', 'infobox-visible')
            ->first();

        return view('index', [
        'infoboxHeading' => $infoboxHeading->value ?? null,
        'infoboxText' => $infoboxText->value ?? null,
        'infoboxVisible' => $infoboxVisible->value ?? null,
        ]);
    }
}
