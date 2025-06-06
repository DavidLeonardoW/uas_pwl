<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'file_path',
    ];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
