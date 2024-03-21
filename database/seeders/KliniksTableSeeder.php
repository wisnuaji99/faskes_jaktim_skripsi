<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Klinik;

class KliniksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kliniks1=Klinik::create([
            'nama_klinik' => 'Klinik Yadika',
            'penanggung_jawab' => 'Dr. Novita',
            'alamat' => 'Jl. Lap. Tembak No. 9 ,Pekayon',
            'kecamatan_id' => 6,
            'kelurahan_id' => 41,
            'no_telepon' => '081219674297',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks2=Klinik::create([
            'nama_klinik' => 'Klinik Citra Medika',
            'penanggung_jawab' => 'dr. Dani Pramudya',
            'alamat' => 'Jl. Raya Bogor Km. 28 Rt..Rw. 03/02 Kel. Pekayon',
            'kecamatan_id' => 6,
            'kelurahan_id' => 41,
            'no_telepon' => '082138605155',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks3=Klinik::create([
            'nama_klinik' => 'Klinik PT Panasonic',
            'penanggung_jawab' => 'dr.Soetjiningsih',
            'alamat' => 'Jl. Raya Bogor Km. 29, Pekayon',
            'kecamatan_id' => 6,
            'kelurahan_id' => 41,
            'no_telepon' => '0811865745',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks4=Klinik::create([
            'nama_klinik' => 'Klinik Intertek',
            'penanggung_jawab' => 'dr.Hj. Yudhawati',
            'alamat' => 'Jl. Raya Bogor KM. 28 Rt. 04/07 , Kel. Pekayon',
            'kecamatan_id' => 6,
            'kelurahan_id' => 41,
            'no_telepon' => '08561801177',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks5=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Rafa',
            'penanggung_jawab' => 'dr. R.Herman K',
            'alamat' => 'Jl. Gongseng Raya No. 48 Rt/Rw. 04/01 Kel. Baru Kec. Pasar Rebo',
            'kecamatan_id' => 6,
            'kelurahan_id' => 44,
            'no_telepon' => '08129099040',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks6=Klinik::create([
            'nama_klinik' => 'Klinik Medika Ananda',
            'penanggung_jawab' => 'dr. Rikha Sri M',
            'alamat' => 'Jalan hasan no 9 RT 02/09 kel baru',
            'kecamatan_id' => 6,
            'kelurahan_id' => 44,
            'no_telepon' => '082272896908',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks7=Klinik::create([
            'nama_klinik' => 'Klinik Anugerah',
            'penanggung_jawab' => 'dr.Nella Christia E',
            'alamat' => 'Jl. Gongseng Raya No. 2 , RT 06/09. Kel Baru',
            'kecamatan_id' => 6,
            'kelurahan_id' => 44,
            'no_telepon' => '082113071352',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks8=Klinik::create([
            'nama_klinik' => 'Klinik Fista Nanda',
            'penanggung_jawab' => 0,
            'alamat' => 'jln masjid aljadid I, no 33 rt04/09',
            'kecamatan_id' => 6,
            'kelurahan_id' => 44,
            'no_telepon' => '08170944865',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks9=Klinik::create([
            'nama_klinik' => 'Klinik Budhi Pratama Kalisari ',
            'penanggung_jawab' => 'dr. Nugroho',
            'alamat' => 'Jl. Kalisari II No. 120 Rt. 06/03 Kalisari',
            'kecamatan_id' => 6,
            'kelurahan_id' => 45,
            'no_telepon' => '089523919301',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks10=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Salamah Kalisari',
            'penanggung_jawab' => 'dr. Elmizah ',
            'alamat' => 'Jl. Lapan Kalisari No. 176 Rt/Rw. 13/02 Kel. Kalisari Kec. Pasar Rebo ',
            'kecamatan_id' => 6,
            'kelurahan_id' => 45,
            'no_telepon' => '081284851772',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks11=Klinik::create([
            'nama_klinik' => 'Klinik Yadika',
            'penanggung_jawab' => 'dr. Rahmi Pudiastuti ',
            'alamat' => 'Jl. Baret Biru III No. 6 ,RT 6 RW 3 ',
            'kecamatan_id' => 6,
            'kelurahan_id' => 45,
            'no_telepon' => '087788674445',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks12=Klinik::create([
            'nama_klinik' => 'Klinik Budi Pratama Gedong',
            'penanggung_jawab' => 'dr.Rifki Effendi Suyono',
            'alamat' => 'Jl. Raya Tengah No. 26 Rt/Rw. 06/01 Kel. Gedong',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '085642207402',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks13=Klinik::create([
            'nama_klinik' => 'PT. Frisian Flag Indonesia',
            'penanggung_jawab' => 'dr. Wijanto Widjaja',
            'alamat' => 'Jl. Raya Bogor KM. 5 Rt/Rw 005/02 Kel. Gedong ',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '08161972700',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks14=Klinik::create([
            'nama_klinik' => 'Klinik Sandoz',
            'penanggung_jawab' => 'dr. M.Arief Novianto, MKK,Sp Ok',
            'alamat' => 'Gd. PT SANDOZ INDONESIA, Jl. TB Simatupang Rt. 007 Rw. 001',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '081316807203',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks15=Klinik::create([
            'nama_klinik' => 'Estetiderma',
            'penanggung_jawab' => 'dr M Karyadi Hadiprodjo,MM',
            'alamat' => 'Ruko Grand Simatupang 1E, Jl TB. Simatupang Raya, RT 008 RW 02',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '08161144867',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks16=Klinik::create([
            'nama_klinik' => 'Estetiderma',
            'penanggung_jawab' => 'dr M Karyadi Hadiprodjo,MM',
            'alamat' => 'Jl Kesehatan No 16 A RT 04/11 ',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '08161144867',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks17=Klinik::create([
            'nama_klinik' => 'Taqia Medika',
            'penanggung_jawab' => 'dr. Emilia Bulan Baganti',
            'alamat' => 'Jl Gongseng Raya no 1 RT/RW 01/09 Kel Cijantung',
            'kecamatan_id' => 6,
            'kelurahan_id' => 43,
            'no_telepon' => '087883932599',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks18=Klinik::create([
            'nama_klinik' => 'Polma Keskopasus',
            'penanggung_jawab' => 'dr. Alfian',
            'alamat' => 'Jalan jati no 1, Kelurahan Gedong',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '085640452012',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks19=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Polkes Induk Cijantung',
            'penanggung_jawab' => 'dr. Nurini W',
            'alamat' => 'Jl. Sederhana Raya RT01/RW06 Gedong',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '081210238707',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks20=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Rindam Jaya',
            'penanggung_jawab' => 'dr. Nurul',
            'alamat' => 'Jl. Raya Condet No.55 Kel. Gedong',
            'kecamatan_id' => 6,
            'kelurahan_id' => 42,
            'no_telepon' => '082383010185',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks21=Klinik::create([
            'nama_klinik' => 'Klinik Miracle',
            'penanggung_jawab' => 'dr. Subianto',
            'alamat' => 'JL. Matraman Raya NO. 14-16',
            'kecamatan_id' => 7,
            'kelurahan_id' => 6,
            'no_telepon' => '081398281098',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks22=Klinik::create([
            'nama_klinik' => 'Klinik YKKP Bank Dki',
            'penanggung_jawab' => 'Dr.dr.TB Djumhana Atmakusuma,SpPD.K-HOM',
            'alamat' => 'JL. Matraman Raya No. 72 Jak Tim',
            'kecamatan_id' => 7,
            'kelurahan_id' => 6,
            'no_telepon' => '087781238365',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks23=Klinik::create([
            'nama_klinik' => 'Klinik BPU Bio Medis',
            'penanggung_jawab' => 'dr. Juli Widiharto',
            'alamat' => 'JL. Kayu ManisTimur No 52',
            'kecamatan_id' => 7,
            'kelurahan_id' => 4,
            'no_telepon' => '081317282120',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks24=Klinik::create([
            'nama_klinik' => 'Klinik Zafira Medika',
            'penanggung_jawab' => 'dr. Silvani',
            'alamat' => 'JL. Kayu Manis No.37 RT 014/02',
            'kecamatan_id' => 7,
            'kelurahan_id' => 4,
            'no_telepon' => '085224774459',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks25=Klinik::create([
            'nama_klinik' => 'Klinik Sartika ',
            'penanggung_jawab' => 'dr Anis Sundari',
            'alamat' => 'JL. Kayu Manis VIII/78',
            'kecamatan_id' => 7,
            'kelurahan_id' => 4,
            'no_telepon' => '0218504931',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks26=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Keluarga Yayasan Kusuma Buana',
            'penanggung_jawab' => 'Dr.dr. Joedo Prihartono MPH',
            'alamat' => 'JL. Pisangan Baru III No 210 RT010/07',
            'kecamatan_id' => 7,
            'kelurahan_id' => 1,
            'no_telepon' => '08564941670',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks27=Klinik::create([
            'nama_klinik' => 'Klinik Yabi Medika',
            'penanggung_jawab' => 'dr. Clara Magdalena',
            'alamat' => 'JL. Pisangan Baru No. 16 A RT 04 RW 11 Pisangan Baru',
            'kecamatan_id' => 7,
            'kelurahan_id' => 1,
            'no_telepon' => '087773074982',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks28=Klinik::create([
            'nama_klinik' => 'Klinik PKBI DKI Jakarta',
            'penanggung_jawab' => 'dr. Teza Farida/ Bonita',
            'alamat' => 'Jl. Pisangan Baru Timur',
            'kecamatan_id' => 7,
            'kelurahan_id' => 1,
            'no_telepon' => '085649416700',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks29=Klinik::create([
            'nama_klinik' => 'Klinik Karya Bhakti Dhipa',
            'penanggung_jawab' => 'dr. Rahmat Edi Wahyudi/ Bu. Khairunissa',
            'alamat' => 'JL. Pisangan Baru Tengah No. 38 1/12',
            'kecamatan_id' => 7,
            'kelurahan_id' => 1,
            'no_telepon' => '081293330061',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks30=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dr. Abdul Radjak',
            'penanggung_jawab' => 'dr. Hj Hawani Halvina',
            'alamat' => 'JL. Tegalan no. 30 RT 001 RW 07 Kel. Palmeriam',
            'kecamatan_id' => 7,
            'kelurahan_id' => 5,
            'no_telepon' => '081210860229',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks31=Klinik::create([
            'nama_klinik' => 'Klinik Prima Medika',
            'penanggung_jawab' => 'dr. Santi Sasanti',
            'alamat' => 'JL. Kelapa Sawit Raya No 28 RT001/010',
            'kecamatan_id' => 7,
            'kelurahan_id' => 2,
            'no_telepon' => '081210860229',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks32=Klinik::create([
            'nama_klinik' => 'Klinik Bhakti Sairi',
            'penanggung_jawab' => 'dr. Syamsul Andi Hakim',
            'alamat' => 'JL. Kebon Kelapa Tinggi No.1 009/008',
            'kecamatan_id' => 7,
            'kelurahan_id' => 2,
            'no_telepon' => '0818767702',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks33=Klinik::create([
            'nama_klinik' => 'Klinik Namirah',
            'penanggung_jawab' => 'dr. Menik Yuliani',
            'alamat' => 'JL. Utan Kayu Raya No.28',
            'kecamatan_id' => 7 ,
            'kelurahan_id' =>3 ,
            'no_telepon' => '0818767702',
            'jenislayanan_id' => 19 ,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks34=Klinik::create([
            'nama_klinik' => 'Klinik Azka Medika',
            'penanggung_jawab' => 'Dini Maharani Bachtiar',
            'alamat' => 'JL. Kayu Manis X No. 3C RT 002/09 Kayu Manis',
            'kecamatan_id' =>7 ,
            'kelurahan_id' =>4 ,
            'no_telepon' => '082213686708',
            'jenislayanan_id' => 19 ,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks35=Klinik::create([
            'nama_klinik' => 'Klinik Pratama BPKP DKI Jakarta',
            'penanggung_jawab' => 'dr. Hana Amalia',
            'alamat' => 'JL. Parmuka No. 33 Kel. Utan Kayu Utara',
            'kecamatan_id' => 7,
            'kelurahan_id' => 3,
            'no_telepon' => '081315749737',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks36=Klinik::create([
            'nama_klinik' => 'Polkes Induk,00.09.04/JT',
            'penanggung_jawab' => 'drg. Suciyanti Harahap',
            'alamat' => 'JL. Matraman Raya',
            'kecamatan_id' => 7,
            'kelurahan_id' =>6 ,
            'no_telepon' => '08116802004',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks37=Klinik::create([
            'nama_klinik' => 'Klinik Derma Express',
            'penanggung_jawab' => 'dr. Deasy Natalia Bustam',
            'alamat' => 'JL. Utan Kayu Raya No. 79B RT 001/08 Utan Kayu Utara',
            'kecamatan_id' => 7,
            'kelurahan_id' => 3,
            'no_telepon' => '081311806326',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks38=Klinik::create([
            'nama_klinik' => 'Klinik Pratama BPKP DKI Jakarta',
            'penanggung_jawab' => 'dr. Hana Amalia',
            'alamat' => 'JL. Pramuka No. 33 Kel. Utan Kayu Utara',
            'kecamatan_id' => 7,
            'kelurahan_id' => 3,
            'no_telepon' => '081315749737',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks39=Klinik::create([
            'nama_klinik' => 'Polkes Induk,00.09.04/JT',
            'penanggung_jawab' => 'drg. Suciyanti Harahap',
            'alamat' => 'JL. Matraman Raya',
            'kecamatan_id' => 7,
            'kelurahan_id' => 6,
            'no_telepon' => '08116802004',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks40=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Ummi Medika',
            'penanggung_jawab' => 'Dr. Hendi Purwanto Bastaman',
            'alamat' => 'KRT. Radjiman Widyoningrat No 54 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '46833267',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks41=Klinik::create([
            'nama_klinik' => 'Klinik Wisma Asri Medika',
            'penanggung_jawab' => 'dr. Ali Nur Subkhan',
            'alamat' => 'Jl. KRT Radjiman Widyoningrat No 14',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '08111977995',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks42=Klinik::create([
            'nama_klinik' => 'Klinik Nayaka Era Husada 03',
            'penanggung_jawab' => 'dr. Zarliani',
            'alamat' => 'Jl. KRT Radjiman Widyoningrat No 26',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks43=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Sukma Anggrek',
            'penanggung_jawab' => 'Dr. Budiman Murdani L Tobing',
            'alamat' => 'JL Raya Bekasi Km 18 No 8 Rt 10/04 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '46823314',
            'jenislayanan_id' => 19,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks44=Klinik::create([
            'nama_klinik' => 'Poliklinik PT DNP Indonesia',
            'penanggung_jawab' => 'Dr. Okky Hutama',
            'alamat' => 'Jl Pulo Gadung No 16-18, Kav II H2 & II H3, Kawasan Industri Pulo Gadung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '4610313',
            'jenislayanan_id' =>21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks45=Klinik::create([
            'nama_klinik' => 'Klinik Mustika Aesthetic ',
            'penanggung_jawab' => 'Dr. Nasriyatul Hannak',
            'alamat' => 'Jl Raya Bekasi Km 18 no 21',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks46=Klinik::create([
            'nama_klinik' => 'Klinik Kimia Farma Kawasan Industri Pulogadung',
            'penanggung_jawab' => 'dr Franki Yuniar Maradona/ dr Elsa Martina',
            'alamat' => 'Jl. Rawa Gelam V no 1 kawasan Industri Pulogadung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '02122466906',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks47=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Sumber Waluyo',
            'penanggung_jawab' => 'dr. Asri Badarudin',
            'alamat' => 'Jl. Radjiman RT.008/012',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '082125594944',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks48=Klinik::create([
            'nama_klinik' => 'PT Herlina Indah',
            'penanggung_jawab' => 'dr. Shabrina Ghassani Roza',
            'alamat' => 'Jalan Rawa Sumur II Blok DD No 16,  Kawasan Industri Pulogadung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '4609482',
            'jenislayanan_id' => 22,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks49=Klinik::create([
            'nama_klinik' => 'PT Johnson Home Hygiene',
            'penanggung_jawab' => 'dr Ajeng Amelianingtyas',
            'alamat' => 'JL. RAWA SUMUR NO.12 JAKARTA INDUSTRIAL ESTATE PULOGADUNG, JATINEGARA , CAKUNG, JAKARTA TIMUR , KODE POS : 13930',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '08113303968',
            'jenislayanan_id' => 22,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks50=Klinik::create([
            'nama_klinik' => 'PT Pamapersada Nusantara',
            'penanggung_jawab' => 'dr Erie Wisudiyono',
            'alamat' => 'Jl.Rawa Gelam I No.9 Kel.Jatinegara Kec.Cakung Kawasan Industri Pulogadung Jakarta Timur 13930',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '081952848448',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks51=Klinik::create([
            'nama_klinik' => 'In House Klinik Nayaka House Musik',
            'penanggung_jawab' => 'dr Ananda Rosi ES',
            'alamat' => 'Jl. Pulo Buaran IV, KIP Pulo Gadung blok B 3 JJ 6, Kel.Jatinegara Kec. Cakung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '081218339697',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks52=Klinik::create([
            'nama_klinik' => 'Andalan Medika',
            'penanggung_jawab' => 'dr. Henry Antares',
            'alamat' => 'Dr. KRT Radjiman Widyodiningrat  RT02/RW.13',
            'kecamatan_id' => 9,
            'kelurahan_id' => 62,
            'no_telepon' => '087774414630',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks53=Klinik::create([
            'nama_klinik' => 'Klinik Permata Bunda',
            'penanggung_jawab' => 'dr.Arikafitri Andini',
            'alamat' => 'Jl Marzuki no 28 RT/RW 012/001 Penggilingan Cakung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks54=Klinik::create([
            'nama_klinik' => 'Klinik Pratama PT Yamaha Indonesia Motor Manufacturing',
            'penanggung_jawab' => 'dr. Ni Nyoman Yuliadhyatmi',
            'alamat' => 'Jl. Dr.KRT.Radjiman Widyodiningrat RW 06',
            'kecamatan_id' => 9,
            'kelurahan_id' => 61,
            'no_telepon' => '4612222',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks55=Klinik::create([
            'nama_klinik' => 'Klinik Permata Bunda',
            'penanggung_jawab' => 'dr.Arikafitri Andini',
            'alamat' => 'Jl Marzuki no 28 RT/RW 012/001 Penggilingan Cakung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks56=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Renny Eva Sari',
            'penanggung_jawab' => 'Dr. Fauzan Rahman',
            'alamat' => 'Jl. P Komarudin Rt 10/05 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '22830433',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks57=Klinik::create([
            'nama_klinik' => 'Klinik Bina Husada Bakti',
            'penanggung_jawab' => 'dr. Afridal Castro',
            'alamat' => 'Jl. Raya Penggilingan No.12 RT.07/08 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '22464998',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks58=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Klapa 2',
            'penanggung_jawab' => 'dr. Pony Ndaruji',
            'alamat' => 'Jl. Raya Penggilingan No.03 RT.11/07 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '4601927',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks59=Klinik::create([
            'nama_klinik' => 'Klinik Mitra',
            'penanggung_jawab' => 'dr. Gunawan Tjhia',
            'alamat' => 'Jl. Raya Penggilingan RT.07/07 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '4805201',
            'jenislayanan_id' => 18,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks60=Klinik::create([
            'nama_klinik' => 'Klinik Nurmala Medica 01',
            'penanggung_jawab' => 'dr. Lusia Dewi Khristina Wbs',
            'alamat' => 'Jl. Pedaengan No.60 RT.05/08 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 63,
            'no_telepon' => '4608479',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks61=Klinik::create([
            'nama_klinik' => 'Klinik Syabil Medika',
            'penanggung_jawab' => 'dr. H Wais Al-Qurni',
            'alamat' => 'Jl Raya Tipar Cakung Rt 2/9',
            'kecamatan_id' => 9,
            'kelurahan_id' => 59,
            'no_telepon' => '',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks62=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Poliklinik PT. United Tractors Tbk',
            'penanggung_jawab' => 'dr. Febrina Listya Andanti',
            'alamat' => 'Jl. Raya Bekasi KM 22 RT.001/001 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 59,
            'no_telepon' => '0811859118',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks63=Klinik::create([
            'nama_klinik' => 'Klinik Pratama PT Bina Sinar Amity',
            'penanggung_jawab' => 'dr. dian Puspita Sari',
            'alamat' => 'Jl Raya Cakung Cilincing Km 03 Jakarta Timur',
            'kecamatan_id' => 9,
            'kelurahan_id' => 59,
            'no_telepon' => '4603401',
            'jenislayanan_id' => 19,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks64=Klinik::create([
            'nama_klinik' => 'Klinik SKF',
            'penanggung_jawab' => 'dr . Afrina',
            'alamat' => 'Jln. Cakung Drain RT 01/ RW 09 Kel Cakung Barat',
            'kecamatan_id' => 9,
            'kelurahan_id' => 59,
            'no_telepon' => '081297578884',
            'jenislayanan_id' => 22,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks65=Klinik::create([
            'nama_klinik' => 'Klinik Pelita Insani',
            'penanggung_jawab' => 'dr. Nelsy Maitar',
            'alamat' => 'Jl. Inspeksi PAM No. 95 RT 04/04',
            'kecamatan_id' => 9,
            'kelurahan_id' => 59,
            'no_telepon' => '081385714706',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks66=Klinik::create([
            'nama_klinik' => 'Klinik Widya Husada',
            'penanggung_jawab' => 'dr. Risyaf Saladin',
            'alamat' => 'Jl Raya Penggilingan no 3 Rt 1/1 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 59,
            'no_telepon' => '4618161',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks67=Klinik::create([
            'nama_klinik' => 'klinik Pratama Nurmala Medika 02',
            'penanggung_jawab' => 'dr. Meigi Suwarto',
            'alamat' => 'jl bulak indah rt 1/12',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks68=Klinik::create([
            'nama_klinik' => 'klinik mitra cakung',
            'penanggung_jawab' => 'dr. Rika Erna Maynovalina',
            'alamat' => 'Jl. Balai rakyat No 38 kp gempol rt 3/1 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '081382220794',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks69=Klinik::create([
            'nama_klinik' => 'klinik mitra warga medika',
            'penanggung_jawab' => 'dr. Irodatul Husnah',
            'alamat' => 'jl raya kayu tinggi rt 1/11 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks70=Klinik::create([
            'nama_klinik' => 'Natasha Skin Clinic Center',
            'penanggung_jawab' => 'Dr. Ananda Sujati',
            'alamat' => 'AEON MALL Jakarta Garden City Cakung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks71=Klinik::create([
            'nama_klinik' => 'ZAP AEON Jakarta Garden City',
            'penanggung_jawab' => 'dr. Arindhita Permatasari',
            'alamat' => 'AEON Mall Jakarta Garden City Lantai 1-G2. Jl Boulevard Jakarta Garden City Cakung',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '22463155',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks72=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Attaufik Medical Center',
            'penanggung_jawab' => 'dr. Muhammad Syah',
            'alamat' => 'Kp. Gempol RT/RW 003/001',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '087877614524',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks73=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Erha Apothecary',
            'penanggung_jawab' => 'dr Jessica Ubercaprita',
            'alamat' => 'Aeon Mall JGC Ground Floor Unit G-09 Jl. Kayu Tinggi',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '085890279797',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks74=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dental Theory',
            'penanggung_jawab' => 'drg. Fadlia Murtafia',
            'alamat' => 'Ruko The Walk No. 26 JGC Jl. Raya Cakung Cilincing',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '08953373306',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks75=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Wijaya Platinum',
            'penanggung_jawab' => 'dr Findhy',
            'alamat' => 'Ruko Boulevard City TB/19 JGC',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '081381333918',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks76=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Le Merrian',
            'penanggung_jawab' => 'dr Ivo',
            'alamat' => 'Ruko The Walk No. 57 JGC Cakung Timur',
            'kecamatan_id' => 9,
            'kelurahan_id' => 60,
            'no_telepon' => '',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks77=Klinik::create([
            'nama_klinik' => 'Klinik Pertamedika Medan',
            'penanggung_jawab' => 'dr. Sri Sumanti Purwatiningsih',
            'alamat' => 'JL. Arun IX No 2 Rt 09/04 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 65,
            'no_telepon' => '4604944',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks78=Klinik::create([
            'nama_klinik' => 'Klinik Cava Medika',
            'penanggung_jawab' => 'dr. Bonifasi Lestari',
            'alamat' => 'Jl Raya Bekasi Km 26 RT 01/01 No 02 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 65,
            'no_telepon' => '2146827547',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks79=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Tiara Estetika',
            'penanggung_jawab' => 'dr. Harjani Ledi Mulyana',
            'alamat' => 'Ruko Taman Modern Blok R1 No.12 RT.010/006',
            'kecamatan_id' => 9,
            'kelurahan_id' => 65,
            'no_telepon' => '4614091',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks80=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Amelia Medika',
            'penanggung_jawab' => 'dr. Vicky Ali Rausyan Fikri',
            'alamat' => 'Jl. Raya PuloGebang Rt 5/4',
            'kecamatan_id' => 9,
            'kelurahan_id' => 65,
            'no_telepon' => '081223468727',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks81=Klinik::create([
            'nama_klinik' => 'Klinik Millenium Sehat Abadi',
            'penanggung_jawab' => 'Dr. Hadi Purnomo Halim, MM',
            'alamat' => 'Jl Raya pulo Gebang No 43  Rt 05/04',
            'kecamatan_id' => 9,
            'kelurahan_id' => 64,
            'no_telepon' => '4804304',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks82=Klinik::create([
            'nama_klinik' => 'Klinik Dewa Medika',
            'penanggung_jawab' => 'Dr. Delvina Anastasya Pertiwi',
            'alamat' => 'Jln. Raya Pulogebang Rt03/Rw03 Kel Pulogebang ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 64,
            'no_telepon' => '4802944',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks83=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Cempaka 24 Jam',
            'penanggung_jawab' => 'Dr. Gita Monika',
            'alamat' => 'Jl. Raya Pulo Gebang No 86 Rt 06/06 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 64,
            'no_telepon' => '4801980',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks84=Klinik::create([
            'nama_klinik' => 'Klinik Ar-Rahmah',
            'penanggung_jawab' => 'dr. Ridwan Ahmad Albana',
            'alamat' => 'Jl. Komarudin Rt 02/05 No 10 ',
            'kecamatan_id' => 9,
            'kelurahan_id' => 64,
            'no_telepon' => '4803295',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks85=Klinik::create([
            'nama_klinik' => 'Klinik PKPP',
            'penanggung_jawab' => 'drg Ayu Widowati',
            'alamat' => 'Kantor Walikota Jakarta Timur Blok A lantai 1, Jln Dr. Sumarno  Rt 11/ RW 08',
            'kecamatan_id' => 9,
            'kelurahan_id' => 64,
            'no_telepon' => '082298638394',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks86=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Batari Husada',
            'penanggung_jawab' => 'dr.Leni Astuti',
            'alamat' => 'Jl. Buaran Sakti No. 59 RT 3/RW 13 Klender',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '08974437626',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks87=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dermaga Raya',
            'penanggung_jawab' => 'dr.Dina Meilina',
            'alamat' => 'Jl.Dermaga Raya No.79 RT 003/ RW 008',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '86602590',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks88=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Al-Falah',
            'penanggung_jawab' => 'dr.Mochamad Sani, MM',
            'alamat' => 'Jl.Pahlawan Revolusi No.2A RT 10/06',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '02186613318',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks89=Klinik::create([
            'nama_klinik' => 'Klinik Pratama St.Carolus Samadi Klender',
            'penanggung_jawab' => 'drg. Yuliana Helena, MARS',
            'alamat' => 'Jl. Bulak Raya No 58 RT. 03 RW 07',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '8615514',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks90=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Axel Dental',
            'penanggung_jawab' => 'drg.Dianita Purbarani',
            'alamat' => 'Jl.Buaran Raya No.92 RT 01/ RW 14',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '02122322829',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks91=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Win Medika',
            'penanggung_jawab' => 'dr.Luthfi Mahmudah',
            'alamat' => 'Jl.Cipinang Muara III No.6 RT 007/ RW 004',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '02186612248',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks92=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kimia Farma 147 Duren Sawit',
            'penanggung_jawab' => 'dr. Siti Sarah',
            'alamat' => 'Jl. duren sawit raya blok B3 no 29',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '28531226',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks93=Klinik::create([
            'nama_klinik' => 'Klinik Pratama ERTO BEAUTY CLINIC',
            'penanggung_jawab' => 'dr.Amanda Rahmania',
            'alamat' => 'Jl. Buaran Raya No.95 & 98A, RT.1/RW.14',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '0218607580',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks94=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Griya Asih',
            'penanggung_jawab' => 'dr.Natalia Permatasari',
            'alamat' => 'JL. Buaran III RT 03/ RW 13',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '087875247378',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks95=Klinik::create([
            'nama_klinik' => 'Klinik Pratama DL Slim & Skin Care',
            'penanggung_jawab' => 'dr.Irma Pratiwy',
            'alamat' => 'Jl. Dermaga Raya No.46, RT.7/RW.16',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '02186612920',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks96=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Zglow',
            'penanggung_jawab' => 'dr.Milka Anisya Norasiya',
            'alamat' => 'Jl Raden Inten II No 58 ',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '08119004996',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks97=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Berkah Medika',
            'penanggung_jawab' => 'dr.Deva Ani',
            'alamat' => 'Jl.SMP 135 RT 7/RW 7, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '081315008381',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks98=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Medissa',
            'penanggung_jawab' => 'dr.Mohadjri',
            'alamat' => 'Jl.Pahlawan Revolusi No.15B, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '02186609727',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks99=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Rutan Pondok Bambu',
            'penanggung_jawab' => 'dr. Titien Widya Astuti, MARS',
            'alamat' => 'Jl.Pahlawan Revolusi, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '8612004',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks100=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Naavagreen Skin Care',
            'penanggung_jawab' => 'dr. Dian Nurhani Safitri',
            'alamat' => 'Jl.Pahlawan Revolusi No.46, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '21285044',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks101=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kimia Farma Pondok Bambu',
            'penanggung_jawab' => 'dr.Mega Permata',
            'alamat' => 'Jl.Pahlawan Revolusi No.53, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '02128535366',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks102=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Fairy',
            'penanggung_jawab' => 'dr. Bernard Christian Hasugian',
            'alamat' => 'Jl.Pahlawan Revolusi No.8B, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '02186611407',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks103=Klinik::create([
            'nama_klinik' => 'Klinik Pratama HappyTooth - Pondok Bambu',
            'penanggung_jawab' => 'drg. Lenie Dahliana',
            'alamat' => 'Jl. Pahlawan Revolusi no 57 ',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '085211300100',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks104=Klinik::create([
            'nama_klinik' => 'Klinik Pratama HappyTooth - Kalimalang',
            'penanggung_jawab' => 'drg. Ahmad Rusydi HMS',
            'alamat' => 'Jl. Kalimalang Raya E7 Kalimalang Mas Building no 7',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '088908819191',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks105=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dava',
            'penanggung_jawab' => 'dr. Elni Lukman',
            'alamat' => 'Jl.Kejaksaan Raya No.21, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '0218616608',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks106=Klinik::create([
            'nama_klinik' => 'Klinik Pratama E3A',
            'penanggung_jawab' => 'dr. Emilia Kasturi',
            'alamat' => 'Jl. Camar Blok CC No.15 Cipinang Indah II',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '08179988322',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks107=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Cipinang Indah',
            'penanggung_jawab' => 'dr. Roswita Eva Magdalena',
            'alamat' => 'Cipinang Indah 2, Jl. Merak no 1, ',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '0811900359',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks108=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Tiara Medika',
            'penanggung_jawab' => 'dr.Siti Fatimah',
            'alamat' => 'Apt Casablanca East Residence, Pondok Bambu',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '087780755335',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks109=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Skina Aesthetics',
            'penanggung_jawab' => 'dr.Siska Kristina Purnamasari',
            'alamat' => 'Jl. Pahlawan Revolusi No.16C, RT.3/RW.4',
            'kecamatan_id' => 3,
            'kelurahan_id' => 22,
            'no_telepon' => '02122088457',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks110=Klinik::create([
            'nama_klinik' => 'Klinik Pratama FDC Dental Clinic',
            'penanggung_jawab' => 'drg.Farida',
            'alamat' => 'Jl. Teratai Putih Raya No.2, RT.8/RW.4',
            'kecamatan_id' => 3,
            'kelurahan_id' => 26,
            'no_telepon' => '02186616675',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks111=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kimia Farma Malaka Jaya',
            'penanggung_jawab' => 'dr.Jayanti',
            'alamat' => 'Jalan Teratai Putih Raya blok 28 kav 9 L RT.6/RW.13',
            'kecamatan_id' => 3,
            'kelurahan_id' => 26,
            'no_telepon' => '08161953452',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks112=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Lulu Medika',
            'penanggung_jawab' => 'drg.Atikka Muhammad .B.',
            'alamat' => 'Jl.Raya Pondok Kelapa Blok C4 No.38, RT 04/ RW 11',
            'kecamatan_id' => 3,
            'kelurahan_id' => 26,
            'no_telepon' => '087881508090',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks113=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Putewa',
            'penanggung_jawab' => 'dr.Dian Triana Mayasari',
            'alamat' => 'Jl.Nusa Indah Raya Blok 40 No.17 RT 012/ RW 003',
            'kecamatan_id' => 3,
            'kelurahan_id' => 26,
            'no_telepon' => '0218622207',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks114=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Yakrija',
            'penanggung_jawab' => 'Suci Widiastuti',
            'alamat' => 'Jl. Teratai Putih Raya Blok 28 No.9F',
            'kecamatan_id' => 3,
            'kelurahan_id' => 26,
            'no_telepon' => '081212156555',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks115=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Agung Medika',
            'penanggung_jawab' => 'dr. Muhammad Agung HBS',
            'alamat' => 'Jl.Pondok Kelapa Raya Blok L10 No.2',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '085102213866',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks116=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Medikasih',
            'penanggung_jawab' => 'dr.Armida Simanungkalit',
            'alamat' => 'Jl.Taman Malaka Selatan Blok K16 No.12-14',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '8643186',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks117=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Maryani-Tamsil',
            'penanggung_jawab' => 'dr. Maryani Masud',
            'alamat' => 'Jln. Pondok Kelapa Raya Blok C7/18',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '081311391953',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks118=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Audrey Beauty Center',
            'penanggung_jawab' => 'dr.Ineke Sunarjo',
            'alamat' => 'Jl.Kalimalang Raya A2/6 RT 001/ RW 004',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '8648120',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks119=Klinik::create([
            'nama_klinik' => 'Klinik Pratama RALINE MEDICA CLINIC ',
            'penanggung_jawab' => 'dr.RAIHANA SAKTIRYANI ',
            'alamat' => 'Jln raya pondok kelapa, Blok G1 no 7B  RT.1/RW.11',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '085959737418',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks120=Klinik::create([
            'nama_klinik' => 'Klinik Pratama BEAU CLINIC',
            'penanggung_jawab' => 'dr.Siti Latifah Nur Rahima',
            'alamat' => 'Jl. Pondok kelapa Raya Blok A7 No13 B-C, RT.1/RW.4',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '02186907295',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks121=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dzakira Haiyfa',
            'penanggung_jawab' => 'dr.Fauzan Rahman',
            'alamat' => 'Jl. H. Naman No.67A, RT.17/RW.2',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '02129622788',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks122=Klinik::create([
            'nama_klinik' => 'Klinik Pratama FDC Dental Clinic',
            'penanggung_jawab' => 'drg.Afifah',
            'alamat' => ' Jl. Inspeksi Kalimalang No.9C, RT.2/RW.11',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '081112205808',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks123=Klinik::create([
            'nama_klinik' => 'Klinik AH',
            'penanggung_jawab' => 'dr.Rizqiana Alfi Huda',
            'alamat' => 'Jl.Pondok Kelapa, RT 006/ RW 011',
            'kecamatan_id' => 3,
            'kelurahan_id' => 24,
            'no_telepon' => '0218645080',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks124=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Bunga Rampai',
            'penanggung_jawab' => 'Dr. Endang MSK Barus',
            'alamat' => 'Jl. Bunga Rampai Raya no. 38 RT 07/RW 012',
            'kecamatan_id' => 3,
            'kelurahan_id' => 26,
            'no_telepon' => '86607297',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks125=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Ibin Sina',
            'penanggung_jawab' => 'dr.Gilang Swarnita',
            'alamat' => 'Jl.Pendidikan Raya No.33 RT 05/ RW 01',
            'kecamatan_id' => 3,
            'kelurahan_id' => 23,
            'no_telepon' => '08816875627',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks126=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kecantikan Estetika Jasper',
            'penanggung_jawab' => 'dr.Dian Rizki Rahayu',
            'alamat' => 'Jl. Raden Inten II No.4, RT.8/RW.15',
            'kecamatan_id' => 3,
            'kelurahan_id' => 23,
            'no_telepon' => '085785639285',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks127=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Assistama',
            'penanggung_jawab' => 'dr. Retno Asti Werdhani',
            'alamat' => 'Jl. Radin Inten II NO.80 Ruko Exclusive Radin Inten',
            'kecamatan_id' => 3,
            'kelurahan_id' => 23,
            'no_telepon' => '08129603432',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks128=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Medika Prakarsa',
            'penanggung_jawab' => 'dr.Eka Surya Septiawan',
            'alamat' => 'Jalan Radin Inten II No 31 Duren Sawit, RT 03/RW 07',
            'kecamatan_id' => 3,
            'kelurahan_id' => 23,
            'no_telepon' => '86908103',
            'jenislayanan_id' => 226,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks129=Klinik::create([
            'nama_klinik' => 'Klinik Pratama DR. CHAIRIL TANJUNG',
            'penanggung_jawab' => 'dr.Chairil Tanjung Sp.OG',
            'alamat' => 'Jl. Teratai Putih Raya Blok 18 No.6A-B, RT.12/RW.4',
            'kecamatan_id' => 3,
            'kelurahan_id' => 27,
            'no_telepon' => '34652238',
            'jenislayanan_id' => 27,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks130=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Fakultas Farmasi dan Sains UHAMKA',
            'penanggung_jawab' => 'dr.Anjasari',
            'alamat' => 'Jl. Delima II Gg. 4, RT.9/RW.3, Malaka Sari',
            'kecamatan_id' => 3,
            'kelurahan_id' => 27,
            'no_telepon' => '0895622610219',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks131=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Griya Denta',
            'penanggung_jawab' => 'drg.Elita Febrianty',
            'alamat' => 'Jl. Buaran Raya No.9, RT.6/RW.13',
            'kecamatan_id' => 3,
            'kelurahan_id' => 28,
            'no_telepon' => '02129193610',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks132=Klinik::create([
            'nama_klinik' => 'Klinik Pratama MEKAR SARI',
            'penanggung_jawab' => 'dr. Wahyuningtyastuti Widia Purnama Dewi',
            'alamat' => 'Jl.Cililitan besar No.13 Rt.12/01.Makasar, Kota Administrasi Jakarta Timur ',
            'kecamatan_id' => 4,
            'kelurahan_id' => 37,
            'no_telepon' => '081311022224',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks133=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA BAHAGIA',
            'penanggung_jawab' => 'dr.Andriani Damanik',
            'alamat' => 'JL.JENGKI RT 04/09  NO 6 C D KEL.KEBON PALA KEC.MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 37,
            'no_telepon' => '081380188853',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks134=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Fajar Medika',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Jengki Gg. Mushola No. 15 Kel.Kebon Pala Kec.Makasar Kota Administrasi Jakarta Timur',
            'kecamatan_id' => 4,
            'kelurahan_id' => 40,
            'no_telepon' => '081288380551',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks135=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA SANTOSA',
            'penanggung_jawab' => 'dr. Berlian Maurise Hendrawati',
            'alamat' => 'JL.JENGKI RT 02/12 NO 11 D KEL.KEBON PALA KEC.MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 40,
            'no_telepon' => '8002689',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks136=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kelurga Kita Angkasa Pura',
            'penanggung_jawab' => 'dr.Gerrywilianto',
            'alamat' => 'Jl.Komodor Halim Perdana Kusuma Makasar, Kota Administrasi Jakarta Timur ',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '02180899320',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks137=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kimia Farma',
            'penanggung_jawab' => 'drg.Amatul Firdaus Ramadhan',
            'alamat' => 'Jl.Komodor Halim Perdana Kusuma  Rt 03/07 Makasar, Kota Administrasi Jakarta Timur ',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '8092199',
            'jenislayanan_id' => 24,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks138=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kharisma',
            'penanggung_jawab' => 'dr,Bambang E.D',
            'alamat' => 'Jl.Asri No.35 Komodor  Halim   RT 01/07 Kel.Halim Kec Makasar Kota Administrasi Jakarta Timur',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '081310005158',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks139=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA KARYA BAKTI P.RANTI',
            'penanggung_jawab' => 'dr.Septelina Lasniati',
            'alamat' => 'Jln.Raya Pondok Gede Rt 005/02 No. 23  , Kel.Pinang Ranti ',
            'kecamatan_id' => 4,
            'kelurahan_id' => 36,
            'no_telepon' => '0852888854355',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks140=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA SAHARA',
            'penanggung_jawab' => 'dr.Ida Fianty',
            'alamat' => 'Jln.Raya Pondok Gede Rt 005/02 No. 88A , Kel.Pinang Ranti ',
            'kecamatan_id' => 4,
            'kelurahan_id' => 36,
            'no_telepon' => '08128181659',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks141=Klinik::create([
            'nama_klinik' => 'Klinik Pratama  Kelurga Kita (Angkasa Pura 2)',
            'penanggung_jawab' => 'dr.Gery Wilianto',
            'alamat' => 'Jl.Komodor Halim Perdana Kusuma',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks142=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA DIRGANTARA HALIM',
            'penanggung_jawab' => 'drg. Cecilia Glyceria Yogrha Messara',
            'alamat' => 'JL.SETIOBOMO NO.01 RT/RW 01/02 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '80879256',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks143=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA DENMA KODIKLAT  AU',
            'penanggung_jawab' => 'drg.Maria Gloria',
            'alamat' => 'JL.GOLF RAYA NO.1 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '80870287',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks144=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA  SATKES KOHANUDNAS',
            'penanggung_jawab' => 'dr.Lea Ratna Lestari',
            'alamat' => 'JL.MUSTANG NO. 5 KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '8009343',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks145=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA SATKES DENMA KOOPSAU 1',
            'penanggung_jawab' => 'dr.Ratih Kartika Sari',
            'alamat' => 'JL.KOPATDARA NO.1  KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '8001578',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks146=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA RAJAWALI',
            'penanggung_jawab' => 'dr.Duma Wenty Irene',
            'alamat' => 'JL.RAJAWALI RAYA KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '80882817',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks147=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA Kantor Kesehatan Pelabuhan Kelas 1 Sukarno Hatta',
            'penanggung_jawab' => 'dr.Tunggul Birowo,M.H',
            'alamat' => 'BANDARA HALIM JL.Halim Perdana Kusuma  KEL.HALIM PERDANA KUSUMA KEC,MAKASAR KOTA ADMINISTRASI JAKARTA TIMUR',
            'kecamatan_id' => 4,
            'kelurahan_id' => 38,
            'no_telepon' => '081388287491',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks148=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA Kantor Kesehatan Pelabuhan Kelas 1 Sukarno Hatta',
            'penanggung_jawab' => 'dr. Hawani',
            'alamat' => 'Jl.Jengki Raya No 8 RT 08 Rw 02 Kel Kebon Pala Kec.Makasar Jakarta Timur',
            'kecamatan_id' => 4,
            'kelurahan_id' => 40,
            'no_telepon' => '081372060696',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks149=Klinik::create([
            'nama_klinik' => 'Kias Kencana BKKBN',
            'penanggung_jawab' => 'dr.Eka Susanti',
            'alamat' => 'Kantor BKKBN Jl. Permata No. 1 Kel.Kebon Pala Kec.Makasar Kota Administrasi Jakarta Timur',
            'kecamatan_id' => 4,
            'kelurahan_id' => 40,
            'no_telepon' => '08128471938',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks150=Klinik::create([
            'nama_klinik' => 'Klinik Daarussyifa',
            'penanggung_jawab' => 'dr Rahwana',
            'alamat' => 'Jl. Monumen Pancasilan sakti rt 014/09 Lb. Buaya',
            'kecamatan_id' => 10,
            'kelurahan_id' => 51,
            'no_telepon' => '081288880667',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks151=Klinik::create([
            'nama_klinik' => 'klinik Nayaka ',
            'penanggung_jawab' => 'dr Miftahul Jannah',
            'alamat' => 'Jl. Pondok Gede Raya Ruko Mulek no 2B',
            'kecamatan_id' => 10,
            'kelurahan_id' => 51,
            'no_telepon' => '081290958389',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks152=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Assomadiyah medicare Center',
            'penanggung_jawab' => 'dr Srie Nurhayati',
            'alamat' => 'Jl.Albaidho raya no 2a  L.Buaya',
            'kecamatan_id' => 10,
            'kelurahan_id' => 51,
            'no_telepon' => '081314120022',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks153=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Ardita',
            'penanggung_jawab' => 'dr. Ami Mulyanti',
            'alamat' => 'JL.Raya Cilangkap rt 4/5',
            'kecamatan_id' => 10,
            'kelurahan_id' => 56,
            'no_telepon' => '08128939646',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks154=Klinik::create([
            'nama_klinik' => 'Klinik Nur Alif',
            'penanggung_jawab' => 'dr Susilo Nugroho',
            'alamat' => 'Jl Raya Cilangkap rt 001 rw 05 Kel. Cilangkap  Cipayung Jak- Tim',
            'kecamatan_id' => 10,
            'kelurahan_id' => 56,
            'no_telepon' => '8452787',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks155=Klinik::create([
            'nama_klinik' => 'Klinik Melati Medika',
            'penanggung_jawab' => 'dr Putri Prihartati',
            'alamat' => 'Jl asyafiiyah rt 05 rw 03 No 174 Kel. Cilangkap Jak -Tim',
            'kecamatan_id' => 10,
            'kelurahan_id' => 56,
            'no_telepon' => '082112382340',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks156=Klinik::create([
            'nama_klinik' => 'KliniK Pratama Permata Bunda',
            'penanggung_jawab' => 'dr Lintong Napitupulu',
            'alamat' => 'Jln. Budi Murni ',
            'kecamatan_id' => 10,
            'kelurahan_id' => 53,
            'no_telepon' => '085101340858',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks157=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Ananda',
            'penanggung_jawab' => 'dr Yulius Kandoko ',
            'alamat' => 'Jln Mini III rt 12/03 Bambu Apus',
            'kecamatan_id' => 10,
            'kelurahan_id' => 58,
            'no_telepon' => '0816822660',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks158=Klinik::create([
            'nama_klinik' => 'Klinik Printis sehat',
            'penanggung_jawab' => 'dr H achmad sofyan',
            'alamat' => 'Jl. Malaka no 100 Munjul',
            'kecamatan_id' => 10,
            'kelurahan_id' => 53,
            'no_telepon' => '70952511',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks159=Klinik::create([
            'nama_klinik' => 'Klinik sagas',
            'penanggung_jawab' => 'dr Estiningtias Prihatiningsih',
            'alamat' => 'Jl Raya Cilangkap rt 03/01',
            'kecamatan_id' => 10,
            'kelurahan_id' => 53,
            'no_telepon' => '02184303761',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks160=Klinik::create([
            'nama_klinik' => 'Klinik Pratama TMII',
            'penanggung_jawab' => 'dr Radwia Siyamiati',
            'alamat' => 'Jl Raya Taman Mini, Area Wisata TMII Kel.Ceger',
            'kecamatan_id' => 10,
            'kelurahan_id' => 52,
            'no_telepon' => '087770213505',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks161=Klinik::create([
            'nama_klinik' => 'Klinik koronka',
            'penanggung_jawab' => 'Florentina Yuni Hartati',
            'alamat' => 'Jln raya Munjul no 55 ',
            'kecamatan_id' => 10,
            'kelurahan_id' => 54,
            'no_telepon' => '08122014848',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks162=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Patria Medika',
            'penanggung_jawab' => 'dr Berliana',
            'alamat' => 'Jln Raya Bina Marga rt 002',
            'kecamatan_id' => 10,
            'kelurahan_id' => 52,
            'no_telepon' => '02129824061',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks163=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Satkes Denma Mabesal',
            'penanggung_jawab' => 'dr Monita Arya Marina',
            'alamat' => 'Jln Raya hankam Kelurahan Cilangkap',
            'kecamatan_id' => 10,
            'kelurahan_id' => 56,
            'no_telepon' => '',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks164=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Satkes Denma Mabesau',
            'penanggung_jawab' => 'dr Yazid ',
            'alamat' => 'Jln Raya hankam Mabes TNI AU rt 00/00 Kelurahan Cilangkap',
            'kecamatan_id' => 10,
            'kelurahan_id' => 56,
            'no_telepon' => '081289666911',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks165=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Satkes Denma Mabes TNI',
            'penanggung_jawab' => 'dr Fitriana Hapsari',
            'alamat' => 'Jln Raya hankam Kelurahan Cilangkap',
            'kecamatan_id' => 10,
            'kelurahan_id' => 56,
            'no_telepon' => '081218242645',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks166=Klinik::create([
            'nama_klinik' => 'Klinik BPU SS MEDKA OHM Kramat Jati',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Dewi Sartika no. 292 C RT 04/05 Kel. Cawang Tel. 80870172',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks167=Klinik::create([
            'nama_klinik' => 'Klinik Hygea Kramat Jati',
            'penanggung_jawab' => 'dr. Feriyah',
            'alamat' => 'Jl. Dewi sartika NO.261 Cawang 3 Kel Cawang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '82133668492',
            'jenislayanan_id' => 29,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks168=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Anda Sehat Kramat Jati',
            'penanggung_jawab' => 'Jl. SMEA VI No.24 Kel. Cawang Kec. Kramat Jati',
            'alamat' => '',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks169=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Binawan Kramat Jati',
            'penanggung_jawab' => 'dr Hilwa Alwaini',
            'alamat' => 'Jl. Kalibata Raya No.25-30 Rt.12/05 Kel. Cawang Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '081280005154',
            'jenislayanan_id' => 29,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks170=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Merial Health Kramat Jati',
            'penanggung_jawab' => 'Abd Halik Malik',
            'alamat' => 'Jln. Dewi sartika no. 312 A. RT 09/04 Kel. CAWANG',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '-85341162998',
            'jenislayanan_id' => 30,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks171=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Medika 24 jam',
            'penanggung_jawab' => 'dr Anita natiur Panggabean',
            'alamat' => 'Jl. Dewi Sartika No. 296 Rt.01/04, Cawang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '081369160469',
            'jenislayanan_id' => 29,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks172=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kecantikan FBC Kramat Jati',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Raya Bogor No.04, RT.2/RW.13, Cililitan  Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13640',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks173=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Sejahtera Mitra Afia Kramat Jati',
            'penanggung_jawab' => 'dr Alfy Abaria',
            'alamat' => 'Jl. Jambul No.17-18 Rt. 05/13 Dewi Sartika Kel. Cililitan Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '081280530130',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks174=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kasih Kramat Jati',
            'penanggung_jawab' => 'dr Suwardika Putra',
            'alamat' => 'Jl. Cililitan Besar No.83 Rt.03/09 Kel. Cililitan Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '087779531702',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks175=Klinik::create([
            'nama_klinik' => 'ESTETIKA FBC',
            'penanggung_jawab' => '',
            'alamat' => 'Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks176=Klinik::create([
            'nama_klinik' => 'Klinik AS-SYIFA',
            'penanggung_jawab' => 'dr. Lina Hendrawati',
            'alamat' => 'Jl Condet Raya No 5 RT 01/16 Kel Cililitan Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '085774766574',
            'jenislayanan_id' => 29,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks177=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Sartika 24 jam',
            'penanggung_jawab' => 'dr Ira Angraini',
            'alamat' => 'Jln Dewi Sartika no 22  RT 05/13 Kel Cililitan Jakarta Timur',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '081267223030',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks178=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Esther Kramat Jati',
            'penanggung_jawab' => 'dr. Dyah Gayatri Kusumasari',
            'alamat' => 'Jln Kelapa Gading V No 1 RT 001/003 Kel Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 29,
            'no_telepon' => '081290003565',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks179=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dianindra Kramat Jati',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Rs. Polri, RT.12/RW.4, Kramat Jati, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13510',
            'kecamatan_id' => 2,
            'kelurahan_id' => 29,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks180=Klinik::create([
            'nama_klinik' => 'Klinik Condet 24 Jam Kramat Jati',
            'penanggung_jawab' => 'dr. Lestari Soebowo',
            'alamat' => 'Jl Condet Raya no 3 RT 003/04  Kel. Batu Ampar Kec Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' => '081292782106',
            'jenislayanan_id' => 29,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks181=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Al Fauzan Kramat Jati',
            'penanggung_jawab' => 'dr Farida Lusiana',
            'alamat' => 'Jalan Raya Condet No. 02 RT 005/003 Kel. Batu Ampar',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' => '081311518394',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks182=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kimia Farma Condet ',
            'penanggung_jawab' => 'dr Devi Anneta',
            'alamat' => 'Jalan Raya Condet No. 30 B Kel. Batu Ampar',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' => '8567806033',
            'jenislayanan_id' => 29,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks183=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Medika Kramat Jati',
            'penanggung_jawab' => 'dr. Arief Wahyu Mulyana',
            'alamat' => 'Jl. Batu Ampar III No.55 RT 11/02 Kel. Batu Ampar Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks184=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Nura Dental Care & Aesthetics Kramat Jati',
            'penanggung_jawab' => 'drg Nila Kresna Noviyanti',
            'alamat' => 'Jln. Raya Tengah No. 31 FRT 07/03 Kel. Batu Ampar',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' => '08174994122',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks185=Klinik::create([
            'nama_klinik' => 'Klinik NKDC DENTAL CARE',
            'penanggung_jawab' => 'drg. Nila Kresna Noviyanti',
            'alamat' => 'Jln. Batu Ampar III no 3A RT 12/02 Kel. Batu Ampar Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' =>  '081572459999',
            'jenislayanan_id' => 24,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks186=Klinik::create([
            'nama_klinik' => 'Klinik Pratama CANTIKEAYU AESTHETIC CLINIC',
            'penanggung_jawab' => 'dr. Witra Ayu',
            'alamat' => 'Jln Jl. Raya Tengah no 31 F lantai 2 RT 07/03 Kel Batu Ampar Kec Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 30,
            'no_telepon' => '081287640076',
            'jenislayanan_id' => 25,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks187=Klinik::create([
            'nama_klinik' => 'Klinik Jasmine Estetika Kramat Jati',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Munggang no.14 Kel Balekambang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 31,
            'no_telepon' => '',
            'jenislayanan_id' => 25,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks188=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Global Doctor Kramat Jati',
            'penanggung_jawab' => 'dr. Agung Triyatno',
            'alamat' => 'Jl. Kayu Manis No. 21 A Kel. Balekambang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 31,
            'no_telepon' => '081311734277',
            'jenislayanan_id' => 29,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks189=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Sejahtera Medica Kramat Jati',
            'penanggung_jawab' => '',
            'alamat' => 'Jalan Condet Raya no. 9 E RT 005/003 KEL. Balekambang Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 31,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks190=Klinik::create([
            'nama_klinik' => 'AL KHAIRAT',
            'penanggung_jawab' => '',
            'alamat' => 'Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 31,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks191=Klinik::create([
            'nama_klinik' => 'ESTETIKAKU',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Raya Condet No. 9B, Balekambang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 31,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks192=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Bina Sehat Insani Kramat Jati',
            'penanggung_jawab' => 'dr. Endar Maskendar',
            'alamat' => 'Jl Raya Tengah No.10 Rt.06/09 Kel Tengah Kec Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 32,
            'no_telepon' => '081380890864',
            'jenislayanan_id' => 29,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks193=Klinik::create([
            'nama_klinik' => 'MGM 24',
            'penanggung_jawab' => '',
            'alamat' => 'Jln Raya Tengah/Inpres no 10 RT 04/01 Kel. Tengah',
            'kecamatan_id' => 2,
            'kelurahan_id' => 32,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks194=Klinik::create([
            'nama_klinik' => 'Klinik Marga Bhakti Husada Kramat Jati',
            'penanggung_jawab' => 'dr Srikoning Widyaningsih',
            'alamat' => 'Plaza Tol Taman Mini Indonesia Indah Rt.08/02 Kel. Dukuh Kec Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 33,
            'no_telepon' => '87884340515',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks195=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Dokter Abdul Radjak Pondok Gede Kramat Jati',
            'penanggung_jawab' => 'dr Tety Sri S',
            'alamat' => 'Jl. Raya Pondok Gede No. 23-25 Kel. Dukuh Kec. Kr. Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 33,
            'no_telepon' => '081326610706',
            'jenislayanan_id' => 24,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks196=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Restu Ibu Kramat Jati',
            'penanggung_jawab' => 'dr. Mahesa Paranadipa Maikel',
            'alamat' => 'Jl. Penggilingan Baru No. 104 RT 08/04 Kel. Dukuh Kec Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 33,
            'no_telepon' => '085240713171',
            'jenislayanan_id' => 31,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks197=Klinik::create([
            'nama_klinik' => 'Klinik pratama sinergi lisna medika 01',
            'penanggung_jawab' => '',
            'alamat' => '',
            'kecamatan_id' => 2,
            'kelurahan_id' => 33,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks198=Klinik::create([
            'nama_klinik' => 'Klinik Pratama BNN Kramat Jati',
            'penanggung_jawab' => 'dr Sitty Jewuskadara',
            'alamat' => 'Jalan MT Haryono No. 11 Kel. Cawang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '08128678344',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks199=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Polma Kodam Jaya Kramat Jati',
            'penanggung_jawab' => 'dr Putri Nindya Citra',
            'alamat' => 'Jl. Mayjen Sutoyo no 5 RT 007/007 Kel Cawang',
            'kecamatan_id' => 2,
            'kelurahan_id' => 34,
            'no_telepon' => '',
            'jenislayanan_id' => 34,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks200=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Badan Kepegawaian Negara Kramat Jati',
            'penanggung_jawab' => 'dr Tety',
            'alamat' => 'Jl. Let.Jend Sutoyo no 12 Rt. 06/14 Kel. Cililitan Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 35,
            'no_telepon' => '',
            'jenislayanan_id' => 29,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks201=Klinik::create([
            'nama_klinik' => 'Klinik Pratama MAPUSKESAD',
            'penanggung_jawab' => 'dr Afriani Likun',
            'alamat' => 'Jl. Mayjen Sutoyo RT 03 /11 Kel. Cililitan Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 35,
            'no_telepon' => '081349396122',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks202=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Satpelkes Dinas Lingkungan Hidup Kramat Jati',
            'penanggung_jawab' => 'drg Adria MARS',
            'alamat' => 'Jl.Mandala V No.67 Rt 01/02 Kel. Cililitan',
            'kecamatan_id' => 2,
            'kelurahan_id' => 35,
            'no_telepon' => '087878628864',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks203=Klinik::create([
            'nama_klinik' => 'Klinik BPHN',
            'penanggung_jawab' => '',
            'alamat' => 'Jl Mayjen Sutoyo No 10 Kel Cililitan Kec. Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 35,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks204=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Pusdikkes TNI AD',
            'penanggung_jawab' => 'drg. Widda Mayuyani, M.M',
            'alamat' => 'Jln Raya Bogor Kel Kramat Jati',
            'kecamatan_id' => 2,
            'kelurahan_id' => 29,
            'no_telepon' => '081367150030',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks205=Klinik::create([
            'nama_klinik' => 'Tjakra 24 jam ',
            'penanggung_jawab' => 'dr. Darwin Dahsyat',
            'alamat' => 'Jl. Raya Bogor KM. 24 No. 35 Rt/Rw. 001/01 Kel. Susukan',
            'kecamatan_id' => 5,
            'kelurahan_id' => 49,
            'no_telepon' => '081314941245',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks206=Klinik::create([
            'nama_klinik' => 'Suci Husada ',
            'penanggung_jawab' => 'Dr.Edi Satriawan, MARS',
            'alamat' => 'Jl. Suci No. 21 RT. 008 RW. 006 Kel. Susukan',
            'kecamatan_id' => 5,
            'kelurahan_id' => 49,
            'no_telepon' => '089602702728',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks207=Klinik::create([
            'nama_klinik' => 'KLINIK JESINDA',
            'penanggung_jawab' => 'dr. Evi Maryam, MARS',
            'alamat' => 'Jl. Kelapa Dua Wetan Komp. PTB II C/3, Kel. Kelapa Dua Wetan, Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '081345297144',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks208=Klinik::create([
            'nama_klinik' => 'SETIA RUMANDA',
            'penanggung_jawab' => 'dr. Henny Estikasari',
            'alamat' => 'Jl. Lapangan Tembak No. 62 RT.002/RW.07, Kel. Kelapa Dua Wetan, Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '0811855633',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks209=Klinik::create([
            'nama_klinik' => 'Namiera',
            'penanggung_jawab' => 'dr. RAHMI MUTIADEWI DALIMUNTHE',
            'alamat' => 'Jl. Kelapa Dua Wetan No. 10 RT.002/RW.05 Kel. Kelapa Dua Wetan, Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '081908092574',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks210=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Mitra Diani',
            'penanggung_jawab' => 'dr. Dian Permana',
            'alamat' => 'Jl. Raya Pkp No.16, RT.9/RW.12, Kel. Kelapa Dua Wetan, Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '081381115151',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks211=Klinik::create([
            'nama_klinik' => 'Khitan Bogem',
            'penanggung_jawab' => 'dr. Dexi Andriyanto',
            'alamat' => 'Jl. Manunggal Raya No. 1 A RT.013/RW.08, Kel. Kelapa Dua wetan, Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '081213900678',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks212=Klinik::create([
            'nama_klinik' => 'Anggrek Medika 24 Jam',
            'penanggung_jawab' => 'dr winda Alicia irene ',
            'alamat' => 'Jl.  PKP Raya No. 32 RT.002/RW.08, Kel. Kelapa Dua Wetan Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '081386839253',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks213=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Surya Medika ',
            'penanggung_jawab' => 'dr. ENDIVIA RIZKI MAGHFIROH',
            'alamat' => 'JL. KELAPA DUA WETAN RT.001 RW.008 KEL. KELAPA DUA WETAN  KEC. CIRACAS',
            'kecamatan_id' => 5,
            'kelurahan_id' => 47,
            'no_telepon' => '081232012246',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks214=Klinik::create([
            'nama_klinik' => 'DHARMA MULIA - 2 ',
            'penanggung_jawab' => 'dr. Cecelia Naritha',
            'alamat' => 'Jl. Raya Bogor Km. 22 Rt/Rw. 08/02, Kel. Rambutan',
            'kecamatan_id' => 5,
            'kelurahan_id' => 50,
            'no_telepon' => '08121069474',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks215=Klinik::create([
            'nama_klinik' => 'KUSUMA MEDIKA',
            'penanggung_jawab' => 'dr. Welinton M. Simanjuntak',
            'alamat' => 'Jl. Hadidji No. 28 Rt/Rw. 12/02, Rambutan',
            'kecamatan_id' => 5,
            'kelurahan_id' => 50,
            'no_telepon' => '08129988837',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks216=Klinik::create([
            'nama_klinik' => 'MITRA MEDIKA',
            'penanggung_jawab' => 'dr. Caixar Agus Sudharmono',
            'alamat' => 'Jln. Raya Bogor Km. 22 Rt/Rw 010,01, Kel Rambutan, Kec Ciracas Jaktim',
            'kecamatan_id' => 5,
            'kelurahan_id' => 50,
            'no_telepon' => '082373569624',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks217=Klinik::create([
            'nama_klinik' => 'Annisa Ciracas',
            'penanggung_jawab' => 'dr. Pradnya Paramita',
            'alamat' => 'Jl. Ciracas No. 18 Rt/Rw. 004/02 Kel. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '081219240338',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks218=Klinik::create([
            'nama_klinik' => 'ARDITA CIRACAS',
            'penanggung_jawab' => 'dr. rita Erfita',
            'alamat' => 'Jl. Raya Ciracas No. 3A. Rt. 01/02',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '085793393990',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks219=Klinik::create([
            'nama_klinik' => 'SEJAHTERA CIRACAS',
            'penanggung_jawab' => 'dr. Yuni Astutiningsih',
            'alamat' => 'Jl. Raya Ciracas No. 38 Rt/Rw. 16/02 Kel. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '08161801690',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks220=Klinik::create([
            'nama_klinik' => 'Klinik PT. Frisian Flag Indonesia Plant Ciracas',
            'penanggung_jawab' => 'dr. Djoko Kurdo Hutomo Siswoyo Putra',
            'alamat' => 'Jl. Raya Bogor KM. 26 RT. 011 RW. 004 Kel. Ciracas Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '08119000418',
            'jenislayanan_id' => 22,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks221=Klinik::create([
            'nama_klinik' => 'BHAKTI UTAMA MEDIKA',
            'penanggung_jawab' => 'dr amelia nurfajrina',
            'alamat' => 'jl raya ciracas no 1 004/003 kel. Ciracas ',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '081313606061',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks222=Klinik::create([
            'nama_klinik' => 'klinik pratama komplek porli ciracas',
            'penanggung_jawab' => 'dr. Dewi Malahayati',
            'alamat' => 'jl. Komplek porli rt 008 rw 004 kel. Ciracas, kecamatan ciracas ',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '0217218240',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks223=Klinik::create([
            'nama_klinik' => 'klinik pratama Elidas ',
            'penanggung_jawab' => 'DR YOSE RIZAL',
            'alamat' => 'jl raya ciracas no 29 11/03 kel. Ciracas ',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks224=Klinik::create([
            'nama_klinik' => 'Permata Medika',
            'penanggung_jawab' => 'dr. Sahruna',
            'alamat' => 'Jl. Mustika Ratu No. 3 Kel. Ciracas Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '02129842766',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks225=Klinik::create([
            'nama_klinik' => 'Ar-Rahim',
            'penanggung_jawab' => 'dr. H. Asmadi Chaidin, MARS',
            'alamat' => 'Jl. Lapangan Tembak Rt/Rw. 02/02 Kel. Cibubur Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 46,
            'no_telepon' => '08121035025',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks226=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Taruna Jaya',
            'penanggung_jawab' => 'dr. Melvina Tungga Dewi',
            'alamat' => 'jl. Taruna jaya No. 7 RT 04/ RW 13, Cibubur, Ciracas ',
            'kecamatan_id' => 5,
            'kelurahan_id' => 46,
            'no_telepon' => '085280929282',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks227=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Le Beaute',
            'penanggung_jawab' => 'dr. Irza Monalisa AZ',
            'alamat' => 'Cibubur Junction Lt. 1 Blok I.5-7, Jl. Jambore Raya No. 1 RT. 004 RW. 004 Kel. Cibubur Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 46,
            'no_telepon' => '02187755103',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks228=Klinik::create([
            'nama_klinik' => 'kimia farma ',
            'penanggung_jawab' => 'dr laksita ',
            'alamat' => 'l.Lawu B1 No. 1 Arundina Lap, Tembak RT.1/RW.11, Cibubur, ',
            'kecamatan_id' => 5,
            'kelurahan_id' => 46,
            'no_telepon' => '02129626791',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks229=Klinik::create([
            'nama_klinik' => 'ZAP',
            'penanggung_jawab' => 'dr. Arum Puspita Sari',
            'alamat' => 'Cibubur Junction Lt. 1 Blok I 38, Jl. Jambore Raya No. 1Kel. Cibubur Kec. Ciracas',
            'kecamatan_id' => 5,
            'kelurahan_id' => 46,
            'no_telepon' => '081219597933',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks230=Klinik::create([
            'nama_klinik' => 'ORISKIN ',
            'penanggung_jawab' => 'dr. Dian Anugrah',
            'alamat' => 'MALL CIBUBUR JUNTION LT LG, UNIT 5 . JLN JAMBORE NO 01 , KELURAHAN CIBUBUR',
            'kecamatan_id' => 5,
            'kelurahan_id' => 46,
            'no_telepon' => '02187756434',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks231=Klinik::create([
            'nama_klinik' => 'klinik pratama komplek porli ciracas',
            'penanggung_jawab' => 'dr. Dewi Malahayati',
            'alamat' => 'jl. Komplek porli rt 008 rw 004 kel. Ciracas, kecamatan ciracas ',
            'kecamatan_id' => 5,
            'kelurahan_id' => 48,
            'no_telepon' => '0217218240',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks232=Klinik::create([
            'nama_klinik' => 'Alfatonah',
            'penanggung_jawab' => 'dr Maderlis',
            'alamat' => 'Jl Cipinang Timur Raya No 58 Rt 8/3',
            'kecamatan_id' => 1,
            'kelurahan_id' => 11,
            'no_telepon' => '082299066902',
            'jenislayanan_id' => 32,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks233=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Kasih Medika Pulogadung',
            'penanggung_jawab' => 'dr. vonny Maryadi',
            'alamat' => 'Jl Taruna No 42 Rt 14/03',
            'kecamatan_id' => 1,
            'kelurahan_id' => 13,
            'no_telepon' => '087889564545',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks234=Klinik::create([
            'nama_klinik' => 'klinik kimia Farma 04 RAWAMANGUN',
            'penanggung_jawab' => 'dr.Handayani',
            'alamat' => 'Jl Perserikatan No 7-8',
            'kecamatan_id' => 1,
            'kelurahan_id' => 9,
            'no_telepon' => '0214718059',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks235=Klinik::create([
            'nama_klinik' => 'Medina Husada',
            'penanggung_jawab' => 'dr. Edi Sutikno',
            'alamat' => 'Jl Raya Bekasi Km 18 No 3 rt 01/06',
            'kecamatan_id' => 1,
            'kelurahan_id' => 13,
            'no_telepon' => '085959996749',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks236=Klinik::create([
            'nama_klinik' => 'Griya Kesehatan Indonesia',
            'penanggung_jawab' => 'dr. M Tedjasaputra',
            'alamat' => 'Jl Gabus Raya No 11 Rt 04/11',
            'kecamatan_id' => 1,
            'kelurahan_id' => 8,
            'no_telepon' => '0821254429534',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks237=Klinik::create([
            'nama_klinik' => 'Karya Bhakti Cipinang',
            'penanggung_jawab' => 'dr. Robertus aryo Seno H',
            'alamat' => 'Jl Raya Bekasi Timur No 22',
            'kecamatan_id' => 1,
            'kelurahan_id' => 12,
            'no_telepon' => '087808010093',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks238=Klinik::create([
            'nama_klinik' => 'Cahaya Sehat',
            'penanggung_jawab' => 'dr. Nana Lilia H',
            'alamat' => 'Jl Taruna 14/03',
            'kecamatan_id' => 1,
            'kelurahan_id' => 13,
            'no_telepon' => '08193246676',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks239=Klinik::create([
            'nama_klinik' => 'Kasih Bunda',
            'penanggung_jawab' => 'dr. Kristina Sutedja',
            'alamat' => 'Jl. Bandeng raya no 5 rt 12/05',
            'kecamatan_id' => 1,
            'kelurahan_id' => 7,
            'no_telepon' => '087880878908',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks240=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Click House Rawamangun Pulogadung',
            'penanggung_jawab' => 'dr. Gun Gun Gunarto',
            'alamat' => 'Jl. Cipinang Baru Raya No.25 RT 005 / RW 002',
            'kecamatan_id' => 1,
            'kelurahan_id' => 11,
            'no_telepon' => '08179912999',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks241=Klinik::create([
            'nama_klinik' => 'Klinik Pratama dr ERNA Pulogadung',
            'penanggung_jawab' => 'dr. Erna Purnamasari',
            'alamat' => 'Jl. Pondasi No. 12 RT.002 RW. 017 Kelurahan Kayu Putih Kecamatan Pulogadung',
            'kecamatan_id' => 1,
            'kelurahan_id' => 7,
            'no_telepon' => '085775177968',
            'jenislayanan_id' => 20,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks242=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Nayaka Era Husada 09 Pulogadung',
            'penanggung_jawab' => 'dr. Rohana',
            'alamat' => 'Jl. Raya Bekasi No.1, RT.5/RW.1, Jatinegara Kaum, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13240',
            'kecamatan_id' => 1,
            'kelurahan_id' => 12,
            'no_telepon' => '021-22470199',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks243=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Pertamedika Pulogadung',
            'penanggung_jawab' => 'drg. Renvi Hardyanto',
            'alamat' => 'Jalan Mundu Raya No. 1Rt/Rw 12/04 kel. jati , kec. Pulogadung ',
            'kecamatan_id' => 1,
            'kelurahan_id' => 8,
            'no_telepon' => '0811981509',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks244=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Pondasi Medika Pulogadung',
            'penanggung_jawab' => 'dr. Indra Anis',
            'alamat' => 'Jl. Pondasi No.27 E Rt 06 Rw 02 Kel. Kayu Putih Kec. Pulogadung',
            'kecamatan_id' => 1,
            'kelurahan_id' => 7,
            'no_telepon' => '08111913019',
            'jenislayanan_id' => 33,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks245=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Ratnasari Pulogadung',
            'penanggung_jawab' => 'dr.Rama Devarie',
            'alamat' => 'Jl. Bawal Raya No.10 RT.005 RW.008 Kel.Rawamangun Kec.Pulogadung, Jakarta Timur',
            'kecamatan_id' => 1,
            'kelurahan_id' => 9,
            'no_telepon' => '085881623394',
            'jenislayanan_id' => 23,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks246=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Yunda',
            'penanggung_jawab' => 'dr. Emilda Yunda',
            'alamat' => 'Jl. Sinar Jaya no. 17, RT 003 RW 010',
            'kecamatan_id' => 1,
            'kelurahan_id' => 10,
            'no_telepon' => '0214721516',
            'jenislayanan_id' => 21,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks247=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Melati',
            'penanggung_jawab' => 'dr. Rosmini Nurdin, MARS',
            'alamat' => 'Jl. Pisangan Lama III No.7 RT 004 RW 008',
            'kecamatan_id' => 1,
            'kelurahan_id' => 10,
            'no_telepon' => '0214895351',
            'jenislayanan_id' => 21,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks248=Klinik::create([
            'nama_klinik' => 'Kama Clinic',
            'penanggung_jawab' => 'dr.Lia Anggraini, Sp.Og',
            'alamat' => ' Jl. Pemuda No.Kav. 17, RT.2/RW.7,',
            'kecamatan_id' => 1,
            'kelurahan_id' => 9,
            'no_telepon' => '02122478101',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks249=Klinik::create([
            'nama_klinik' => 'UP. PERPARKIRAN DISHUB PROV. DKI JAKARTA',
            'penanggung_jawab' => 'dr.Tuti Haryanti',
            'alamat' => 'Jl. Perintis Kemerdekaan I No. 1 Kel. Kayu Putih Kec. Pulo Gadung',
            'kecamatan_id' => 1,
            'kelurahan_id' => 9,
            'no_telepon' => '0857714106271',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks250=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Cipinang',
            'penanggung_jawab' => 'dr.Dedi Suranda',
            'alamat' => 'Jl.Bakasi Timur Raya no.206 Rt 008/009',
            'kecamatan_id' => 1,
            'kelurahan_id' => 11,
            'no_telepon' => '0214712117',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks251=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Direktorat Jenderal Bea Dan Cukai ',
            'penanggung_jawab' => 'dr. maya C.L Malaihollo',
            'alamat' => 'Jl. Ahmad Yani By Pass, RT.12/RW.5, Rawamangun, Pulo Gadung - Jakarta Timur',
            'kecamatan_id' => 1,
            'kelurahan_id' => 9,
            'no_telepon' => '1500225',
            'jenislayanan_id' => 23,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks252=Klinik::create([
            'nama_klinik' => 'Klinik Pegadaian Permata ',
            'penanggung_jawab' => 'dr. Lian Permata',
            'alamat' => 'Jl. Cipinang Jaya II B No. 42',
            'kecamatan_id' => 8,
            'kelurahan_id' => 11,
            'no_telepon' => '081317460900',
            'jenislayanan_id' => 30,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks253=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Rawat Inap Widodo',
            'penanggung_jawab' => 'dr. Diah Purnamayanti',
            'alamat' => 'Jl. Antariksa III No. 102',
            'kecamatan_id' => 8,
            'kelurahan_id' => 11,
            'no_telepon' => '0218199667',
            'jenislayanan_id' => 32,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks254=Klinik::create([
            'nama_klinik' => 'Klinik Pratama BRImedika',
            'penanggung_jawab' => 'dr. Azdi',
            'alamat' => 'Jl. Otista Raya no 72, RT 004 / RW 005, Kel. Bidara Cina, Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '085693333185',
            'jenislayanan_id' => 29,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks255=Klinik::create([
            'nama_klinik' => 'Laboratorium Klinik Siaga Medika',
            'penanggung_jawab' => 'dr. Toni',
            'alamat' => 'Jl. Otista Rayano 48 RT 001 / RW 003, Kel. Bidara Cina, Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '081212880690',
            'jenislayanan_id' => 29,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks256=Klinik::create([
            'nama_klinik' => 'KLINIK PRATAMA MEDIKO ',
            'penanggung_jawab' => 'DR. INDRAWATI JUANINA WIJAYA',
            'alamat' => 'Jl.Bekasi Timur IX/6 RT 04 rw 03',
            'kecamatan_id' => 8,
            'kelurahan_id' => 18,
            'no_telepon' => '02147483647',
            'jenislayanan_id' => 30,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks257=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Cita Sehat Kel.Cipinang Muara  kecamatan Jatinegara',
            'penanggung_jawab' => 'dr. Agung Zentyo Wibowo',
            'alamat' => 'Jl. Mulya Jaya No. 9 B, Rt/Rw 11/08, Kelurahan Cipinang Muara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '02147483647',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks258=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Cipinang Bali Kel.Cipinang Muara Kec. Jatinegara',
            'penanggung_jawab' => 'dr. Hariani',
            'alamat' => 'Jl. Cipinang Bali II No. 3A RT/RW 008/013',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '081343409519',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks259=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Medika Keluarga kel.Cipinang Muara Kecamatan Jatinegara',
            'penanggung_jawab' => 'dr. Femmy Iravanti',
            'alamat' => 'Jl. Cipinang Muara III Rt/Rw.010/015 ',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '0218500922',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks260=Klinik::create([
            'nama_klinik' => 'Devita Profit',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Raya Jatinegara Timur No. 57 Rt/Rw. 11/02 Kel. Balimester Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '0218501134',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks261=Klinik::create([
            'nama_klinik' => 'PARTIWI',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Jaya II E Rt. 12/09, CBS',
            'kecamatan_id' => 9,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks262=Klinik::create([
            'nama_klinik' => 'Dharma Bakti Medika',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Jaya Raya No. 74 Rt. 08/07, Cip. Besar selatan',
            'kecamatan_id' => 9,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks263=Klinik::create([
            'nama_klinik' => 'JDS',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang  Jaya Raya No 74 RT08/07 Kel. Cipayung Besar Selatan- Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks264=Klinik::create([
            'nama_klinik' => 'MUTIARA SENTRA MEDIKA',
            'penanggung_jawab' => 'Jl. Cawang Baru Utara No. 18 Rt/Rw. 01/11 Kel. Cip.Cempedak kec. Jatinegara',
            'alamat' => '',
            'kecamatan_id' => 8,
            'kelurahan_id' => 17,
            'no_telepon' => '0218507050',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks265=Klinik::create([
            'nama_klinik' => 'CIPINANG BALI',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Bali II No. 3A Rt/Rw. 08/13, Cip Muara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks266=Klinik::create([
            'nama_klinik' => 'MEDIKA SAIRI A.W.',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Prumpung Sawah No. 26 Rt/Rw. 04/06, Cip Besar Selatan',
            'kecamatan_id' => 8,
            'kelurahan_id' => 20,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks267=Klinik::create([
            'nama_klinik' => 'PT. HUTAMA KARYA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. MT. Haryono Kav. 8, Cip Cempedak',
            'kecamatan_id' => 8,
            'kelurahan_id' => 17,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
        $kliniks268=Klinik::create([
            'nama_klinik' => 'MEDIKA KELUARGA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cip. Muara III No. 11 Rt/Rw. 101/015 Kel. Cip. Muara Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks269=Klinik::create([
            'nama_klinik' => 'BRIMEDIKA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otto Iskandardinata no. 68 B RT 003 RW 004',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '02185907845',
            'jenislayanan_id' => 0,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks270=Klinik::create([
            'nama_klinik' => 'PEGADAIAN PERMATA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Jaya 2B No. 42 RT. 007 RW. 007 Kel. Cipinang  Besar Selatan, Kec. Jatinegara, Kota Administrasi Jakarta Timur',
            'kecamatan_id' => 8,
            'kelurahan_id' => 20,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 1,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks271=Klinik::create([
            'nama_klinik' => 'KLINIK ULTRA MEDICA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Muara Raya No. 27 RT 001 RW 003 Kel. Cipinang Muara, Kec. Jatinegara, Kota Administrasi Jakarta Timur',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '02129361096',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks272=Klinik::create([
            'nama_klinik' => 'DL SLIM',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista Raya No. 46A Rt. 04/07, Cip Muara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '02129613763',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks273=Klinik::create([
            'nama_klinik' => 'Avira 24 Jam',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista No. 82 Rt/Rw. 05/06 Kel. Bidara Cina Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '0218199245',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks274=Klinik::create([
            'nama_klinik' => 'KIMIA FARMA CIPINANG',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Jaya  No. 74 RT 008 RW 007 Kel. Cipinang Besar Selatan',
            'kecamatan_id' => 8,
            'kelurahan_id' => 20,
            'no_telepon' => '02129821930',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks275=Klinik::create([
            'nama_klinik' => 'Mediko',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Bekasi Timur IX No. 6 Kel. Rawa Bunga',
            'kecamatan_id' => 8,
            'kelurahan_id' => 18,
            'no_telepon' => '02185910259',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks276=Klinik::create([
            'nama_klinik' => 'JT ',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista III No. 119 Rt/Rw. 01/01 Kel. Cip. Cempedak Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 17,
            'no_telepon' => '081717777003',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks277=Klinik::create([
            'nama_klinik' => 'Agape',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista No. 24 Rt/Rw. 01/02 Kel. Bidara Cina Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks278=Klinik::create([
            'nama_klinik' => 'Otista 24 Jam',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista Raya No. 26 Rt/Rw. 01/02 Bidara cina jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks279=Klinik::create([
            'nama_klinik' => 'Siaga Medika 24 Jam',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista Raya No. 48 Rt/Rw. 01/03 Kel. Bidara Cina Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '0218518101',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks280=Klinik::create([
            'nama_klinik' => 'Santo Antonius',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otista No. 76 Rt/Rw. 04/03 Kel. Bidara Cina Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks281=Klinik::create([
            'nama_klinik' => 'Yunda 3',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cipinang Muara Raya No. 25 Rt/Rw. 12/03 Kel. Cip. Muara Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks282=Klinik::create([
            'nama_klinik' => 'Cita Sehat',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Mulya Jaya No.9 B Rt/Rw.11/8 Kel. Cipinang Muara Kec. Jatinegara ',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks283=Klinik::create([
            'nama_klinik' => 'otista HF',
            'penanggung_jawab' => '',
            'alamat' => '',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks284=Klinik::create([
            'nama_klinik' => 'Poliklinik Cipinang',
            'penanggung_jawab' => '',
            'alamat' => '',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks285=Klinik::create([
            'nama_klinik' => 'Klinik Orange Dental',
            'penanggung_jawab' => '',
            'alamat' => '',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks286=Klinik::create([
            'nama_klinik' => 'Klinik Setia Jaya',
            'penanggung_jawab' => '',
            'alamat' => '',
            'kecamatan_id' => 8,
            'kelurahan_id' => 0,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks287=Klinik::create([
            'nama_klinik' => 'Klinik Pratama Yayasan Bidara Mulia',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Otto Iskandar Dinata No.64, RT.4/RW.15, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '0218191665',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks288=Klinik::create([
            'nama_klinik' => 'Klinik Humanika',
            'penanggung_jawab' => '',
            'alamat' => 'No. 5 Otista, Bidara Cina, Gg. Pertama, RT.6/RW.2, Bidara Cina, Kecamatan Jatinegara,',
            'kecamatan_id' => 8,
            'kelurahan_id' => 16,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks289=Klinik::create([
            'nama_klinik' => 'Klinik Bakti Ananda',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. I Gusti Ngurah Rai, RT.3/RW.6, Cipinang Muara, Kecamatan Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 21,
            'no_telepon' => '0218198514',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks290=Klinik::create([
            'nama_klinik' => 'Poliklinik Darma Bakti',
            'penanggung_jawab' => '',
            'alamat' => 'jl. Panca Warga 2, RT.14/RW.3, Cipinang Besar Sel., Kecamatan Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 20,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks291=Klinik::create([
            'nama_klinik' => 'MEDIKA KELUARGA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Cip. Muara III No. 11 Rt/Rw. 101/015 Kel. Cip. Muara Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 20,
            'no_telepon' => '0218500922',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks292=Klinik::create([
            'nama_klinik' => 'LAPAS NARKOTIKA KLAS II A JAKARTA',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Raya Bekasi Timur Kel. Cip. Besar Utara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 19,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks293=Klinik::create([
            'nama_klinik' => 'Polres Metro Jakarta Timur',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Matraman Raya No. 224 Balimester',
            'kecamatan_id' => 8,
            'kelurahan_id' => 14,
            'no_telepon' => '02122850803',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks294=Klinik::create([
            'nama_klinik' => 'Rutan Klas I Cipinang ',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. Raya Bekasi Timur No. 170 Kel. Cipinang Besar Utara Kec. Jatinegara',
            'kecamatan_id' => 8,
            'kelurahan_id' => 19,
            'no_telepon' => '02133008528',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $kliniks295=Klinik::create([
            'nama_klinik' => 'Kementrian Lingkungan Hidup',
            'penanggung_jawab' => '',
            'alamat' => 'Jl. DI Panjaitan , Kebon Nanas ',
            'kecamatan_id' => 8,
            'kelurahan_id' => 20,
            'no_telepon' => '',
            'jenislayanan_id' => 0,
            'bpjs' => 0,
            'latitude' => '',
            'longitude' => '',
            'images' => '',
            'tahun_pendataan' => 'Februari 2021',
            'status_akreditasi' => 0,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
