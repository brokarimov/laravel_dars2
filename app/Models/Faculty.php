<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name',
        'university_id'
    ];

    public function universities()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function majors()
    {
        return $this->hasMany(Major::class, 'faculty_id');
    }
}
