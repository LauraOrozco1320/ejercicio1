<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'domicilio', 'tfno', 'num_social', 'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
