<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
     protected $fillable = [
        'job_title',
        'job_description',

    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'careers';
}
