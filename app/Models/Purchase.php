<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['supplier_id', 'invoice_id', 'voucher_number', 'purchase_date', 'total_amount', 'payment_status'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
