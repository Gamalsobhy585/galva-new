<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->index();
            $table->text('description_en');
            $table->fullText('description_en');
            $table->string('title_ar')->index();
            $table->text('description_ar');
            $table->fullText('description_ar');            
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2)->nullable()->index();
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('currencies')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes(); 
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
