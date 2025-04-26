<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function allTermsView()
    {
        return view('pages.admin.terms-conditions.all-terms');
    }

    public function createTermsView()
    {
        return view('pages.admin.terms-conditions.create-terms');
    }

    public function createTerms(Request $request)
    {

        $validated = $request->validate([
            'heading' => 'required|string|max:255', // Optional text field with a max length
            'body' => 'required|string',           // Optional long text field
        ]);

        TermsCondition::create($validated);

        return to_route('admin.all-terms')->with(['success' => 'Terms Created']);
    }

    public function updateTermsView(TermsCondition $id)
    {
        $terms = $id;
        return view('pages.admin.terms-conditions.update-terms', compact('terms'));
    }

    public function updateTerms(Request $request , TermsCondition $id)
    {
        $validated = $request->validate([
            'heading' => 'required|string|max:255', // Optional text field with a max length
            'body' => 'required|string',           // Optional long text field
        ]);

        $id->update($validated);
        return to_route('admin.all-terms')->with(['success' => 'Terms Updated']);
    }

    public function deleteTerms(TermsCondition $id)
    {
        $id->delete();
        return to_route('admin.all-terms')->with(['success' => 'Terms Deleted']);
    }
}
