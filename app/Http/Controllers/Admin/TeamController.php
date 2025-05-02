<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function allTeamsView()
    {
        return view('pages.admin.team-members.all-teams');
    }

    public function singleTeamView()
    {
        return view('pages.admin.team-members.create-team');
    }

    public function singleTeamCreate(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $validated['image'] = FileUploader::upload($request->file('image'));

        TeamMember::create($validated);

        return to_route('admin.all-teams')->with(['success' => 'Team Member Created']);
    }

    public function singleTeamDelete(TeamMember $id)
    {
        $id->delete();
        return back()->with(['success' => 'Team Member Deleted']);
    }
}
