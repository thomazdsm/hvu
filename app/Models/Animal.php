<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'id',
        'name',
        'specie_id'
    ];

    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }

    public function tutors()
    {
        return $this->belongsToMany(Tutor::class);
    }
}

