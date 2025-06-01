<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


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
        'deleted_at' => 'datetime', 

    ];
    protected $table = 'services';
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
        protected static function booted()
    {
        static::saving(function ($service) {
            if ($service->isDirty('image') && $service->image) {
                $service->convertToWebP();
            }
        });
    }

    private function convertToWebP()
    {
        if (!$this->image) return;

        $originalPath = storage_path('app/public/' . $this->image);
        
        if (file_exists($originalPath) && !str_ends_with($this->image, '.webp')) {
            $manager = new ImageManager(new Driver());
            $webpImage = $manager->read($originalPath)->toWebp(85);
            
            $webpFilename = pathinfo($this->image, PATHINFO_FILENAME) . '.webp';
            $webpPath = 'services/' . $webpFilename;
            
            Storage::disk('public')->put($webpPath, $webpImage);
            

            Storage::disk('public')->delete($this->image);
            
            $this->attributes['image'] = $webpFilename;
        }
    }
}
