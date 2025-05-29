<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
     protected $fillable = [
        'job_title_en',
        'job_description_en',
        'job_title_ar',
        'job_description_ar',
        'is_active',

    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'careers';
}
