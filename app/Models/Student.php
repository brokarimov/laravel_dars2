<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =[
        'name',
        'tel',
        'group_id',
        'adress_id'
    ];

    public function groups()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function adresses()
    {
        return $this->belongsTo(Adress::class, 'adress_id');
    }
}
