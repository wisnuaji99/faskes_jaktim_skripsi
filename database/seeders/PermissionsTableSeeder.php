<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'jenis_layanans.index']);
        Permission::create(['name' => 'jenis_layanans.create']);
        Permission::create(['name' => 'jenis_layanans.edit']);
        Permission::create(['name' => 'jenis_layanans.delete']);

        Permission::create(['name' => 'kelurahans.index']);
        Permission::create(['name' => 'kelurahans.create']);
        Permission::create(['name' => 'kelurahans.edit']);
        Permission::create(['name' => 'kelurahans.delete']);

        Permission::create(['name' => 'kecamatans.index']);
        Permission::create(['name' => 'kecamatans.create']);
        Permission::create(['name' => 'kecamatans.edit']);
        Permission::create(['name' => 'kecamatans.delete']);

        Permission::create(['name' => 'tempat_tidurs.index']);
        Permission::create(['name' => 'tempat_tidurs.create']);
        Permission::create(['name' => 'tempat_tidurs.edit']);
        Permission::create(['name' => 'tempat_tidurs.delete']);

        Permission::create(['name' => 'rumah_sakits.index']);
        Permission::create(['name' => 'rumah_sakits.create']);
        Permission::create(['name' => 'rumah_sakits.edit']);
        Permission::create(['name' => 'rumah_sakits.delete']);
        
        Permission::create(['name' => 'kliniks.index']);
        Permission::create(['name' => 'kliniks.create']);
        Permission::create(['name' => 'kliniks.edit']);
        Permission::create(['name' => 'kliniks.delete']);

    }
}
