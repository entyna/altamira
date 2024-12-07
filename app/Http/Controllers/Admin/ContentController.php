<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Setting;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function edit()
    {
        $content = Content::all()->groupBy('key');
        $infoboxVisible = Setting::where('key', 'infobox-visible')
            ->first();

        return view('edit-content', [
            'content' => $content,
            'infoboxVisible' => $infoboxVisible,
        ]);
    }

    public function update(Request $request)
    {
    // 1. Iterate through the incoming data and update the database
    foreach ($request->input('content') as $key => $translations) {
        foreach ($translations as $lang => $value) {
            Content::updateOrCreate(
                ['key' => $key, 'lang' => $lang],
                ['value' => $value]
            );
        }
    }

    // 2. Redirect back with a success message
    return redirect()->route('dashboard.content.edit')->with('success', 'Změny uloženy');
}
}
