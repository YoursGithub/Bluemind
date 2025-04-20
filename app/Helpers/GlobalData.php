<?php

namespace App\Helpers;

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
    }

    public static function getData()
    {
        self::loadData();
        return self::$data;
    }
}
