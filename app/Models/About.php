<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'description',
        'is_active'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'abouts';
    protected static function boot()
    {
        parent::boot();
        
        static::saving(function ($about) {
            if ($about->is_active) {
                static::where('id', '!=', $about->id)
                    ->update(['is_active' => false]);
            }
        });
    }
    

    public static function getActive()
    {
        return static::where('is_active', true)->first();
    }
    

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
