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
         Schema::create('event_images', function (Blueprint $table) {
             $table->id();
             $table->string('document');
             $table->string('hashname');
             $table->timestamps();
         });

         Schema::table('event_images', function (Blueprint $table) {
             $table->unsignedBigInteger('event_id');
         
             $table->foreign('event_id')->references('id')->on('events');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_images');
    }
};
