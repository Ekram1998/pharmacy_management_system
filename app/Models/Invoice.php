<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['net_total', 'invoice_date', 'customer_id', 'total_amount', 'total_discount'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
