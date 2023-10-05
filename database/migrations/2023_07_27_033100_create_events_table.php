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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("eventtype");
            $table->string("title");
            $table->string("description");
            $table->string("date");
            $table->string("session")->nullable();
            $table->string("host")->nullable();
            $table->string("partner")->nullable();
            $table->string("speaker")->nullable();
            $table->string("evaluator")->nullable();
            $table->string("budget")->nullable();
            $table->string("document")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
