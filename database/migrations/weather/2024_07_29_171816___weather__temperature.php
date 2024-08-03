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
        Schema::create('weather__temperature', function (Blueprint $table) {
            $table->id();

            $table->string('temperature');
            $table->string('unit', 5)->default('°C');
            $table->date('date');
            $table->time('time');
            $table->integer('station');
            $table->integer('created_by');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather__temperature');
    }
};
