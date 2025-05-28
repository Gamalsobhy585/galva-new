<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
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
    protected $table = 'services';
}
