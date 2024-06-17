<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'paking', 'generic_name', 'supplier_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
