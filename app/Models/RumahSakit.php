<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function jenislayanan()
    {
        return $this->belongsTo(JenisLayanan::class);
    }

    public function tempattidur()
    {
        return $this->belongsTo(TempatTidur::class);
    }

    public function kepemilikan()
    {
        return $this->belongsTo(Kepemilikan::class);
    }
}
