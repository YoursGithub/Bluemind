<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileUploader;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function allBranchesView()
    {
        return view('pages.admin.branch.all-branches');
    }

    public function singleBranchView()
    {
        return view('pages.admin.branch.create-branch');
    }

    public function singleBranchCreate(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'address'     => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $validated['image'] = FileUploader::upload($request->file('image'));

        Branch::create($validated);

        return to_route('admin.all-branches')->with(['success' => 'Branch Created']);
    }

    public function singleBranchDelete(Branch $id)
    {
        $id->delete();
        return back()->with(['success' => 'Branch Deleted']);
    }
}
