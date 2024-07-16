<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc',
        'fecha_inicio',
        'fecha_fin',
        'cuantia',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function colaborators()
    {
        return $this->belongsToMany(Colaborator::class, 'projectcolaborator', 'project_id', 'colaborator_id');
    }
}
