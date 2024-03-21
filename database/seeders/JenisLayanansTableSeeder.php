<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisLayanan;

class JenisLayanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenislayanans1=JenisLayanan::create([
            'jenis_layanan' => 'Publik Umum Kemenkes',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans2=JenisLayanan::create([
            'jenis_layanan' => 'Swasta Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans3=JenisLayanan::create([
            'jenis_layanan' => 'Rumah Sakit Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans4=JenisLayanan::create([
            'jenis_layanan' => 'Kemenkumham',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans5=JenisLayanan::create([
            'jenis_layanan' => 'Swasta Khusus Ibu dan Anak',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans6=JenisLayanan::create([
            'jenis_layanan' => 'Swasta Khusus Bedah',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans7=JenisLayanan::create([
            'jenis_layanan' => 'Kemenkes Khusus',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans8=JenisLayanan::create([
            'jenis_layanan' => 'Pemda Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans9=JenisLayanan::create([
            'jenis_layanan' => 'Pemda DKI',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        $jenislayanans10=JenisLayanan::create([
            'jenis_layanan' => 'Polri Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans11=JenisLayanan::create([
            'jenis_layanan' => 'TNI AD Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans12=JenisLayanan::create([
            'jenis_layanan' => 'Pemda Khusus Jiwa',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans13=JenisLayanan::create([
            'jenis_layanan' => 'Swasta Khusus Bersalin',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans14=JenisLayanan::create([
            'jenis_layanan' => 'TNI AU Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans15=JenisLayanan::create([
            'jenis_layanan' => 'TNI AU Khusus',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans16=JenisLayanan::create([
            'jenis_layanan' => 'Kemenpora',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans17=JenisLayanan::create([
            'jenis_layanan' => 'Swasta Khusus',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans18=JenisLayanan::create([
            'jenis_layanan' => 'Kemenkumham',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans19=JenisLayanan::create([
            'jenis_layanan' => 'Klinik Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $jenislayanans20=JenisLayanan::create([
            'jenis_layanan' => 'Klinik Kecantikan',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $jenislayanans21=JenisLayanan::create([
            'jenis_layanan' => 'Poli Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        $jenislayanans22=JenisLayanan::create([
            'jenis_layanan' => 'Poli Umum (khusus karyawan)',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans23=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans24=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan Gigi',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans25=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan Kecantikan Estetika',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans26=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan Medik Spesialis Dasar Okupasi',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans27=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan Medik Spesialis Dasar Obsgyn',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans28=JenisLayanan::create([
            'jenis_layanan' => 'Bersalin',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans29=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan dasar Medik Umum',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans30=JenisLayanan::create([
            'jenis_layanan' => 'Rawat Jalan',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans31=JenisLayanan::create([
            'jenis_layanan' => 'Pelayanan Gawat Darurat',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans32=JenisLayanan::create([
            'jenis_layanan' => 'Rawat Inap',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans33=JenisLayanan::create([
            'jenis_layanan' => 'Imunisasi',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans34=JenisLayanan::create([
            'jenis_layanan' => 'Gigi dan Mulut',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans35=JenisLayanan::create([
            'jenis_layanan' => 'Hematologi',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $jenislayanans36=JenisLayanan::create([
            'jenis_layanan' => 'KIA/KB',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
