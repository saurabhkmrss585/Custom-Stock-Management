<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakePart extends Model
{
    use HasFactory;
    protected $table = 'make_parts';

    protected $fillable = [
        'part_name',
        'part_quantity',
        'part_price',
        'product_name',
        'products',
    ];
}
