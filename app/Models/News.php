<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
      protected $fillable = [
        'title',
        'description',
        'image',
        'price',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'news';
}
