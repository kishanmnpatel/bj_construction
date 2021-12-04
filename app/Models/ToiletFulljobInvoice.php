<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToiletFulljobInvoice extends Model
{
    use HasFactory;

    protected $fillable=[
        'invoice_id', 'product_id', 'length', 'width', 'height', 'quantity', 'unit_price', 'total',
    ];
}
