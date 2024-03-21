<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class TambahanPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'categories.update']);

        Permission::create(['name' => 'customers.update']);

        Permission::create(['name' => 'products.update']);

        Permission::create(['name' => 'pembelians.update']);
    }
}
