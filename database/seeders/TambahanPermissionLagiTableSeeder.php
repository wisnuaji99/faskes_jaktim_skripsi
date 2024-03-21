<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class TambahanPermissionLagiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Permission::create(['name' => 'permissions.update']);
    
            Permission::create(['name' => 'permissions.delete']);
    
            Permission::create(['name' => 'permissions.create']);
    
            Permission::create(['name' => 'permissions.index']);
    }
}
