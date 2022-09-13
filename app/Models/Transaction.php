<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultation_id', 
        'name', 
        'email', 
        'amount', 
        'transaction_id', 
        'ref_id', 
        'paid_at', 
        'channel', 
        'ip_address', 
        'status'
    ];
}
