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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string("startupname")->nullable();
            $table->string("problem")->nullable();
            $table->string("solution")->nullable();
            $table->string("target")->nullable();
            $table->string("documents")->nullable();
            $table->timestamps();
        });

        Schema::table('participants', function (Blueprint $table) {
            $table->unsignedBigInteger('events_id');
         
            $table->foreign('events_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
