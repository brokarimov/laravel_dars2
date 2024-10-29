<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ovqat extends Model
{
    protected $fillable = [
       'name',
       'ids' 
    ];
    public function masalliqs()
    {
        return $this->belongsToMany(Masalliq::class, 'ovqat_masalliqs', 'ovqat_id', 'masalliq_id');
    }
}
