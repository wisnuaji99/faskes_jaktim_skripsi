<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
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
}
