<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class TambahanUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Permission::create(['name' => 'user.delete']);
    
            Permission::create(['name' => 'user.create']);
    
            Permission::create(['name' => 'user.index']);

            Permission::create(['name' => 'user.edit']);
        }
    }
}
