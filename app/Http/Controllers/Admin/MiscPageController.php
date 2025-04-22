<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class MiscPageController extends Controller
{
    //
    public function homeSettingsView()
    {
        return view('pages.admin.misc.home-settings');
    }

    public function homeSettingsStore(Request $request)
    {
        $validated = $request->validate([
            'happy_clients' => ['required', 'integer', 'min:0'],
            'successful_projects' => ['required', 'integer', 'min:0'],
            'image' => ['nullable', 'image']
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = FileUploader::imageUpload(file: $request->file('image'), path: "images/misc");
        }

        HomePage::updateOrCreate(
            ['id' => 1], // Condition to find the row
            $validated
        );

        return back()->with(['success' => 'Record Updated']);
    }
}
