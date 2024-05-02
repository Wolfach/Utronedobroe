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
        Schema::create('animeposters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->string('type');
            $table->string('year');
            $table->string('episodes');
            $table->string('genre');
            $table->string('actors');
            $table->string('timengman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
