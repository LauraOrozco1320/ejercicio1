<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_pago',
        'type_pay_id',
    ];

    public function typePay()
    {
        return $this->belongsTo(TypePay::class, 'type_pay_id');
    }
}
