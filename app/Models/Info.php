<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{

    protected $fillable = [
        'projects_count',
        'customers_count',
        'tons_per_month',
    ];

    protected $casts = [
        'projects_count' => 'integer',
        'customers_count' => 'integer',
        'tons_per_month' => 'integer',
    ];
}
