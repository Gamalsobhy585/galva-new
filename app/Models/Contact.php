<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'contacts';
}
