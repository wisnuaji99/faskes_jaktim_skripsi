<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class TambahanRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Permission::create(['name' => 'roles.create']);
    
            Permission::create(['name' => 'roles.edit']);
    
            Permission::create(['name' => 'roles.delete']);
    
            Permission::create(['name' => 'roles.index']);
        }
    }
}
