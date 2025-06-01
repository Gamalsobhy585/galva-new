<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
      protected $fillable = [
        'title_en',
        'description_en',
        'title_ar',
        'description_ar',
        'image',
        'price',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $table = 'news';
        protected static function booted()
    {
        static::saving(function ($news) {
            if ($news->isDirty('image') && $news->image) {
                $news->convertToWebP();
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
            $webpPath = 'news/' . $webpFilename;
            
            Storage::disk('public')->put($webpPath, $webpImage);
            

            Storage::disk('public')->delete($this->image);
            
            $this->attributes['image'] = $webpFilename;
        }
    }

}
