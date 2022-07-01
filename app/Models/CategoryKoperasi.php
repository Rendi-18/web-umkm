<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryKoperasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function koperasi()
    {
        return $this->hasMany(Koperasi::class, 'category_koperasi_id');
    }
}
