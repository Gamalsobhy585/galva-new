<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Client extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'logo',
    ];

    protected static function booted()
    {
        static::saving(function ($client) {
            if ($client->isDirty('logo') && $client->logo) {
                $client->convertToWebP();
            }
        });
    }

    private function convertToWebP()
    {
        if (!$this->logo) return;

        $originalPath = storage_path('app/public/' . $this->logo);
        
        if (file_exists($originalPath) && !str_ends_with($this->logo, '.webp')) {
            $manager = new ImageManager(new Driver());
            $webpImage = $manager->read($originalPath)->toWebp(85);
            
            $webpFilename = pathinfo($this->logo, PATHINFO_FILENAME) . '.webp';
            $webpPath = 'clients/' . $webpFilename;
            
            Storage::disk('public')->put($webpPath, $webpImage);
            

            Storage::disk('public')->delete($this->logo);
            
            $this->attributes['logo'] = $webpFilename;
        }
    }
}