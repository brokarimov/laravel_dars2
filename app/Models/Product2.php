<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    protected $fillable = [
        'name',
        'company_id',
        'price',
        'image',
        'count',
    ];
}
