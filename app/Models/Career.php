<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

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
        'deleted_at' => 'datetime', 
    ];
    protected $table = 'careers';
}
