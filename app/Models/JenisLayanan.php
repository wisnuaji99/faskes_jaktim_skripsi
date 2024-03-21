<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function rumahsakit()
    {
        return $this->hasMany(RumahSakit::class);
    }

    
}
