<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class key_document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_lao','title_en','file','key_cate',
    ];
}
