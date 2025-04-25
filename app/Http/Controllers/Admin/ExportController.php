<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(Request $request) {
        // function body

        $data = json_decode($request->input('data'),true);

        // $fields = json_decode($request->input('fields'),true) ;

        dd($data);
    }
}
