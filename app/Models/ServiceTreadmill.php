<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTreadmill extends Model
{
    protected $fillable = [
        'animal_id',
        'doctor_id',
        'process_steps_id',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function processSteps()
    {
        return $this->belongsTo(ProcessStep::class, 'process_steps_id');
    }
}
