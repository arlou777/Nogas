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
    //     Schema::create('docteam', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('tdocument');
    //         $table->string('hashname');
    //         $table->timestamps();
    //     });

    //      Schema::table('docteam', function (Blueprint $table) {
    //         $table->unsignedBigInteger('teams_id');
         
    //          $table->foreign('teams_id')->references('id')->on('team');
    //      });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('docteam');
    // }
};
