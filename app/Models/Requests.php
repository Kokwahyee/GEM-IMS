<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;

    protected $fillable=[
        'sales_personnel',
        'organization',
        'ms_licence',
        'ms_unit',
        'kaspersky_licence',
        'kaspersky_unit',
        'quotation_number',
        'lpo_number',
        'receipt_number',
        'invoice_number',
        'customer_personnel',
        'note',
        'payment_method',
        'date_of_payment'
    ];
}
