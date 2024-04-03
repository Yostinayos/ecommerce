<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('logo');
            $table->string('favicon');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
          
            $table->string('youtube');
          
            $table->string('tiktok');
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
