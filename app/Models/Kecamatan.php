<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function rumahsakit()
    {
        return $this->hasMany(RumahSakit::class);
    }

    public function klinik()
    {
        return $this->hasMany(Klinik::class);
    }
}
