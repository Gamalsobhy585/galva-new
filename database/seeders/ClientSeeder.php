<?php

namespace Database\Seeders;

use App\Models\Client; // Add this import
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        if (!Storage::disk('public')->exists('clients')) {
            Storage::disk('public')->makeDirectory('clients');
        }

        $clients = [
            [
                'name_en' => 'EEC',
                'name_ar' => 'شركة المشروعات الهندسية',
                'logo' => '/1.webp',
            ],
            [
                'name_en' => 'Orascom',
                'name_ar' => 'اوراسكوم',
                'logo' => '/2.webp',
            ],
            [
                'name_en' => 'Hassan Allam',
                'name_ar' => 'حسن علام',
                'logo' => '/3.webp',
            ],
            [
                'name_en' => 'Zamil Steel',
                'name_ar' => 'زامل ستيل',
                'logo' => '/4.webp',
            ],
            [
                'name_en' => 'Emeco',
                'name_ar' => 'شركة الكهروميكانيكية',
                'logo' => '/5.webp',
            ],
            [
                'name_en' => 'Smart Group',
                'name_ar' => 'سمارت جروب',
                'logo' => '/6.webp',
            ],
            [
                'name_en' => 'NSF',
                'name_ar' => 'شركة ناشونال ستيل فابريكيشن',
                'logo' => '/7.webp',
            ],
            [
                'name_en' => 'Madkour',
                'name_ar' => 'مدكور',
                'logo' => '/8.webp',
            ],
            [
                'name_en' => 'Ramac',
                'name_ar' => 'راماك',
                'logo' => '/9.webp',
            ],
            [
                'name_en' => 'Arab Contractors',
                'name_ar' => 'المقاولون العرب',
                'logo' => '/10.webp',
            ],
            [
                'name_en' => 'ASF - Arab Steel Factory',
                'name_ar' => 'الشركة العربية لتصنيع الحديد والصلب',
                'logo' => '/11.webp',
            ],
            [
                'name_en' => 'DIP - Development of Integrated Projects',
                'name_ar' => 'شركة التنمية للمشروعات المتكاملة',
                'logo' => '/12.webp',
            ],
            [
                'name_en' => 'ACROW',
                'name_ar' => 'شركة أكرو',
                'logo' => '/13.webp',
            ],
            [
                'name_en' => 'ASHRY STEEL',
                'name_ar' => 'شركة العشري للصلب',
                'logo' => '/14.webp',
            ],
            [
                'name_en' => 'HADY MEISER',
                'name_ar' => 'شركة هادي ميسر',
                'logo' => '/15.webp',
            ],
            [
                'name_en' => 'EMC',
                'name_ar' => 'شركة EMC',
                'logo' => '/16.webp',
            ],
        ];

        foreach ($clients as $clientData) {
            Client::firstOrCreate(
                ['name_en' => $clientData['name_en']],
                $clientData
            );
        }
    }
}