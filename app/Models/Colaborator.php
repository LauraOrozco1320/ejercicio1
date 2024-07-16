<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborator extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'nif'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'projectcolaborator', 'colaborator_id', 'project_id');
    }

    public function pay()
    {
        return $this->hasMany(Pay::class);
    }
}
