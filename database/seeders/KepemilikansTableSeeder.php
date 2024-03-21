<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kepemilikan;

class KepemilikansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kepemilikan1=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Kementrian',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kepemilikan2=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Pemerintah Daerah',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kepemilikan3=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Umum Swasta',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kepemilikan4=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Umum Angkatan',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kepemilikan5=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Khusus Angkatan',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kepemilikan6=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Khusus Swasta',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kepemilikan7=Kepemilikan::create([
            'kepemilikan' => 'Rumah Sakit Ibu dan Anak',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
