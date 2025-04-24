<?php

namespace App\Helpers;

use App\Models\AboutPage;
use App\Models\Branch;
use App\Models\ContactPage;
use App\Models\HomePage;

class GlobalData
{
    private static $data;

    private static function loadData()
    {
        // Initialize as object if not already
        if (!is_object(self::$data)) {
            self::$data = new \stdClass();
        }

        self::$data->home = HomePage::find(1);

        self::$data->about = AboutPage::find(1);

        self::$data->contact = ContactPage::find(1);

        self::$data->branch = Branch::all();



    }

    public static function getData()
    {
        self::loadData();
        return self::$data;
    }
}
