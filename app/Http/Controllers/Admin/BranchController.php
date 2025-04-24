<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function allBranchesView() {
        return view('pages.admin.branch.all-branches');
    }

    public function singleBranchView() {
        // function body
    }
}
