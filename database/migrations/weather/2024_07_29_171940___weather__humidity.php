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
        Schema::create('weather__humidity', function (Blueprint $table) {
            $table->id();

            $table->string('humidity');
            $table->string('unit', 5)->default('%');
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
        Schema::dropIfExists('weather__humidity');
    }
};
