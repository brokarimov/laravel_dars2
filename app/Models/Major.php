<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        'name',
        'faculty_id'
    ];

    public function faculties()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class, 'major_id');
    }
}
