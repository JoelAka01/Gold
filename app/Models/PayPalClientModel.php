<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayPalClientModel extends Model
{
    protected $fillable = [
        'payment_id', // Ajoutez 'payment_id' à cette liste
        'payer_email', // Ajoutez 'payment_id' à cette liste
        'payment_status',
        'amount',
        'currency',
        'payer_id',
    ];
    use HasFactory;
}
