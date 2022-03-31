<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'create_invoice';
    protected $fillable = [
        'client_name','invoice_date','invoice_number','amount','due_date','status','email'
    ];
    
}
