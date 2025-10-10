<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderproduct extends Model
{
    //
     protected $fillable = [
        'order_id',
        'product_id',
        'jumlah',
        'harga_satuan',
    ];
}
