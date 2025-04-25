<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\DownloadPdf;
use App\Models\HomePage;
use App\Models\SocialMedia;
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
            $validated['image'] = FileUploader::upload(file: $request->file('image'), path: "images/misc");
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
            $validated['image'] = FileUploader::upload(file: $request->file('image'), path: "images/misc");
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


    public function socialSettingsView()
    {
        return view('pages.admin.misc.social-settings');
    }

    public function socialSettingsCreate(Request  $request)
    {
        $validated = $request->validate([
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'youtube' => 'nullable|string',
        ]);

        SocialMedia::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return back()->with(['success' => 'Social Media Updated']);
    }


    public function downloadSettingsView()
    {
        return view('pages.admin.misc.download-settings');
    }

    public function downloadSettingsCreate(Request $request)
    {

        $validated = $request->validate([
            'business_proposal' => ['mimes:pdf'],
            'referral_plan' => ['mimes:pdf'],
            'trading_investment' => ['mimes:pdf'],
            'terms_conditions' => ['mimes:pdf'],
        ]);

        foreach ($validated as $name => $file) {

            if ($request->hasFile($name)) {

                $validated[$name] = FileUploader::upload($request->file($name), 'pdfs');
            }
        }

        DownloadPdf::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return back()->with(['success' => 'Downloads Updated']);

    }
}
