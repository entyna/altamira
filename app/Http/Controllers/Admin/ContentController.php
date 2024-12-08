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

        foreach ($request->input('content') as $key => $translations) {
            foreach ($translations as $lang => $value) {
                Content::updateOrCreate(
                    ['key' => $key, 'lang' => $lang],
                    ['value' => $value]
                );
            }
        }

        $request->validate([
            'infobox-visible' => 'nullable|boolean',
        ]);

        $infoboxVisible = Setting::where('key', 'infobox-visible')->first();

        if ($infoboxVisible) {
            $infoboxVisible->value = $request->has('infobox-visible') ? 1 : 0;
            $infoboxVisible->save();
        }


        return redirect()->route('dashboard.content.edit')->with('success', 'Změny uloženy');
    }
}
