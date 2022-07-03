<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaKoperasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function koperasi()
    {

        return $this->belongsTo(Koperasi::class, 'koperasi_id');
    }
}
