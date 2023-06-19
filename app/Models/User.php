<?php

namespace App\Models;

class User
{
    public static function all()
    {
        return [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ];
    }
}
