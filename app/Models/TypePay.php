<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePay extends Model
{
    use HasFactory;

    protected $table = 'typepays';

    public function pays()
    {
        return $this->hasMany(Pay::class);
    }
}
