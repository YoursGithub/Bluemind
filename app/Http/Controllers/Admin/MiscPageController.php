<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\HomePage;
use Illuminate\Http\Request;

class MiscPageController extends Controller
{
    //
    public function homeSettingsView()
    {
        return view('pages.admin.misc.home-settings');
    }

    public function homeSettingsCreate(Request $request)
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

        return back()->with(['success' => 'Home Updated']);
    }

    public function aboutSettingsView()
    {
        return view('pages.admin.misc.about-settings');
    }

    public function aboutSettingsCreate(Request $request)
    {
        $validated = $request->validate([
            'image' => ['nullable', 'image']
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = FileUploader::imageUpload(file: $request->file('image'), path: "images/misc");
        }

        AboutPage::updateOrCreate(
            ['id' => 1], // Condition to find the row
            $validated
        );

        return back()->with(['success' => 'About Updated']);
    }



    public function contactSettingsView()
    {
        return view('pages.admin.misc.contact-settings');

    }

    public function contactSettingsCreate(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'location_url' => ['required', 'string'],
        ]);

        ContactPage::updateOrCreate(
            ['id' => 1], // Condition to find the row
            $validated
        );

        return back()->with(['success' => 'Contact Updated']);
    }
}
