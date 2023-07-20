<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'phone',
        'cpf'
    ];

    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }
}
