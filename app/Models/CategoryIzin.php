<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryIzin extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function izin()
    {
        return $this->hasMany(Izin::class, 'category_id');
    }
}
