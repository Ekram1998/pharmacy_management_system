<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine_stock extends Model
{
    use HasFactory;
    protected $fillable = ['medicine_id', 'batch_id', 'expire_date', 'quantity', 'mrp', 'rate'];


    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
