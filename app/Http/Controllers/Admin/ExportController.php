<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;

class ExportController extends Controller
{
    public function export(Request $request)
    {

        $data = json_decode($request->input('data'), true);

        // dump($data);


        $headings = json_decode($request->input('headings'), true);

        $properties = json_decode($request->input('properties'), true);

        $csvContent = implode(',', $headings) . "\n";

       
        foreach ($data as $row) {
            // Map through each property
            $values = array_map(function ($prop, $key) use ($row) {

                if (is_array($prop) && isset($row[$key]) && is_array($row[$key])) {
                    // Traverse the nested array
                    $nestedValue = $row[$key];
                    foreach ($prop as $nestedKey) {
                        if (isset($nestedValue[$nestedKey])) {
                            $nestedValue = $nestedValue[$nestedKey];
                        } else {
                            $nestedValue = null; // Default if the key doesn't exist
                            break;
                        }
                    }
                    return $nestedValue;
                }
                
                if ($prop == "username") {
                    return $row['user']['name'];
                }

                if ($prop == "leverage") {

                    return "Cross {$row['leverage']}X";
                }

                if ($prop == "created_at") {

                    return Carbon::parse($row['created_at'])->format('d F Y');
                }


                if ($key == "parent_user") {

                    return $row->parent_user?->email  ?? "Admin";
                }

                // Handle simple properties
                return $row[$prop] ?? null;


            }, $properties, array_keys($properties));

            // Convert values to a CSV row
            $csvContent .= implode(',', $values) . "\n";
        }

        // dd($csvContent);


        return Response::make($csvContent, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="export.csv"',
        ]);
    }
}
