<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
      protected $fillable = [
        'title_en',
        'description_en',
        'title_ar',
        'description_ar',
        'image',
        'price',
        'currency_id',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'services';
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
