<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'time',
        'location',
        'speaker',
        'poster',
        'registration_fee',
        'max_participants',
        'status',
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
