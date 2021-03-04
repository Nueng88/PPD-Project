<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procument_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'description_lao', 'description_en'
    ];
}
