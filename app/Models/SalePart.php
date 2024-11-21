<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePart extends Model
{
    use HasFactory;
    protected $table = 'sale_parts'; 

    protected $fillable = [
        'saleDate',
        'products',
        'total_price' // Add total_price to store the overall price of the sale
    ];
}
