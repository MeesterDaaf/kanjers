<?php

namespace App\Models;

class Area
{

    public static function get()
    {
        return [
            "users",
            "roles",
            "permissions",
            "projects"
        ];
    }
}
