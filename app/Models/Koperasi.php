<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categoryKoperasi()
    {
        return $this->belongsTo(CategoryKoperasi::class, 'category_koperasi_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->hasMany(ProductKoperasi::class, 'koperasi_id');
    }

    public function jasa()
    {
        return $this->hasMany(JasaKoperasi::class, 'koperasi_id');
    }
}
