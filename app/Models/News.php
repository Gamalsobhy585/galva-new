<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
      protected $fillable = [
        'title_en',
        'description_en',
        'title_ar',
        'description_ar',
        'image',
        'price',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'news';
}
