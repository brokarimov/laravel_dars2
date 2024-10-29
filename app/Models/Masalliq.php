<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masalliq extends Model
{
    protected $fillable = [
        'name'
    ];
    public function ovqats()
    {
        return $this->belongsToMany(Ovqat::class, 'ovqat_masalliqs', 'masalliq_id', 'ovqat_id');
    }
}
