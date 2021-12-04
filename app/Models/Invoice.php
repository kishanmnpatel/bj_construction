<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','quotation_no','pdf_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
