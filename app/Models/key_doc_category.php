<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class key_doc_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_lao','title_en','lang_key'
    ];
}
