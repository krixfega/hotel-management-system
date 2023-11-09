<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Seed permissions
        Permission::create(['name' => 'create_booking']);
        Permission::create(['name' => 'view_booking']);
        // Add other permissions as needed
    }
}

