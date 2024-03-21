<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TempatTidur;

class TempatTidursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tempattidur1=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 158,
            'tempat_tidur_intensive_care' => 24,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur2=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 100,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur3=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 164,
            'tempat_tidur_intensive_care' => 11, 
            'BOR' => 7,
            'LOS' => 3.3,
            'TOI' => 1.1,
            'BTO' => 83.3,
            'GDR' => 1.3,
            'NDR' => 8.4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur4=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 98,
            'tempat_tidur_intensive_care' => 3,
            'BOR' => 21,
            'LOS' => 4,
            'TOI' => 13,
            'BTO' => 20,
            'GDR' => 0.58,
            'NDR' => 0.21,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur5=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 108,
            'tempat_tidur_intensive_care' => 13,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur6=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 88,
            'tempat_tidur_intensive_care' => 3, 
            'BOR' => 49,
            'LOS' => 3,
            'TOI' => 5,
            'BTO' => 4,
            'GDR' => 1,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur7=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 60,
            'tempat_tidur_intensive_care' => 3,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur8=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 94, 
            'tempat_tidur_intensive_care' =>8, 
            'BOR' => 30.98,
            'LOS' => 4,
            'TOI' => 10,
            'BTO' => 2,
            'GDR' => 4,
            'NDR' => 2,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur9=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 0,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 18.21,
            'LOS' => 3.44,
            'TOI' => 10.2,
            'BTO' => 23.78,
            'GDR' => 3.26,
            'NDR' => 3.52,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur10=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 29, 
            'tempat_tidur_intensive_care' => 1,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur11=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 45, 
            'tempat_tidur_intensive_care' => 2, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur12=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 6,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur13=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 170,
            'tempat_tidur_intensive_care' => 28,
            'BOR' => 62.26,
            'LOS' => 8,
            'TOI' => 5,
            'BTO' => 12,
            'GDR' => 64.81,
            'NDR' => 48.89,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur14=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 341, 
            'tempat_tidur_intensive_care' => 41,
            'BOR' => 60.5,
            'LOS' => 7.6,
            'TOI' => 2.6,
            'BTO' => 55.9,
            'GDR' => 4.8,
            'NDR' => 2.4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur15=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 76,
            'tempat_tidur_intensive_care' => 5,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur16=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 817,
            'tempat_tidur_intensive_care' => 117,
            'BOR' => 75.48,
            'LOS' => 3.9,
            'TOI' => 1.57,
            'BTO' => 62.57,
            'GDR' => 59.74,
            'NDR' => 37.54,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur17=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 50,
            'tempat_tidur_intensive_care' => 3, 
            'BOR' => 45.66,
            'LOS' => 2.81,
            'TOI' => 3.27,
            'BTO' => 4.48,
            'GDR' => 0,
            'NDR' => 0.21,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur18=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 140, 
            'tempat_tidur_intensive_care' => 8,
            'BOR' => 35,
            'LOS' => 4,
            'TOI' => 8,
            'BTO' => 29,
            'GDR' => 41,
            'NDR' => 23,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur19=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 19,
            'tempat_tidur_intensive_care' => 0, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur20=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 156,
            'tempat_tidur_intensive_care' => 8,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur21=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 522,
            'tempat_tidur_intensive_care' => 30, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur22=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 163,
            'tempat_tidur_intensive_care' => 8,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur23=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 78,
            'tempat_tidur_intensive_care' => 11,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur24=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 67,
            'tempat_tidur_intensive_care' => 12, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur25=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 17,
            'tempat_tidur_intensive_care' => 3,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur26=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 0,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur27=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 31,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 3.7,
            'LOS' => 1.5,
            'TOI' => 6.5,
            'BTO' => 1,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur28=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 50,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur29=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 189,
            'tempat_tidur_intensive_care' => 0, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur30=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 199,
            'tempat_tidur_intensive_care' => 20, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur31=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 190,
            'tempat_tidur_intensive_care' => 12,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur32=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 25,
            'tempat_tidur_intensive_care' => 7,
            'BOR' => 37.21,
            'LOS' => 3,
            'TOI' => 5,
            'BTO' => 49,
            'GDR' => 1,
            'NDR' => 0.6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur33=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 0,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur34=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 100,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur35=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 18,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0.87,
            'LOS' => 4482,
            'TOI' => 0.75,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur36=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 36,
            'tempat_tidur_intensive_care' => 3,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur37=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 48,
            'tempat_tidur_intensive_care' => 2,
            'BOR' => 40.72,
            'LOS' => 3.64,
            'TOI' => 4.52,
            'BTO' => 47.85,
            'GDR' => 15.05,
            'NDR' => 5.85,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur38=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 16,
            'tempat_tidur_intensive_care' => 4,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur39=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 279,
            'tempat_tidur_intensive_care' => 49,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur40=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 120,
            'tempat_tidur_intensive_care' => 3,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur41=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 38,
            'tempat_tidur_intensive_care' => 2,
            'BOR' => 75,
            'LOS' => 1,
            'TOI' => 0,
            'BTO' => 44,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $tempattidur42=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 61,
            'tempat_tidur_intensive_care' => 23, 
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur43=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 180,
            'tempat_tidur_intensive_care' => 24,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur44=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 138,
            'tempat_tidur_intensive_care' => 32,
            'BOR' => 67.67,
            'LOS' => 2.94,
            'TOI' => 1.37,
            'BTO' => 86.06,
            'GDR' => 4.85,
            'NDR' => 14.55,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur45=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 68,
            'tempat_tidur_intensive_care' => 8,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur46=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 62,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur47=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 89,
            'tempat_tidur_intensive_care' => 1,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tempattidur48=TempatTidur::create([
            'tempat_tidur_rawat_inap' => 50,
            'tempat_tidur_intensive_care' => 0,
            'BOR' => 0,
            'LOS' => 0,
            'TOI' => 0,
            'BTO' => 0,
            'GDR' => 0,
            'NDR' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
