<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class MiscPageController extends Controller
{
    //
    public function homeSettingsView()
    {
        $data= HomePage::find(1) ;

        // function body
        return view('pages.admin.misc.home-settings',compact('data'));
    }

    public function homeSettingsStore(Request $request)
    {

        $validated = $request->validate([
            'happy_clients' => 'required|integer|min:0',
            'successful_projects' => 'required|integer|min:0',
        ]);

        HomePage::updateOrCreate(
            ['id' => 1], // Condition to find the row
            [
                'happy_clients' => $validated['happy_clients'],
                'successful_projects' => $validated['successful_projects'],
            ]
        );

        return back()->with(['success' => 'Record Updated']);

    }
}
