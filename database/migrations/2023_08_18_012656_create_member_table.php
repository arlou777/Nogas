<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('member', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('course');
    //         $table->timestamps();
    //     });

    //     Schema::table('member', function (Blueprint $table) {
    //         $table->unsignedBigInteger('sid');
             
    //          $table->foreign('sid')->references('id')->on('users');
    //      });

    //      Schema::table('member', function (Blueprint $table) {
    //         $table->unsignedBigInteger('tid');
             
    //          $table->foreign('tid')->references('id')->on('team');
    //      });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('member');
    // }
};
