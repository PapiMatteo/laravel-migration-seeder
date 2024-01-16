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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100);
            $table->string('departure_station', 100);
            $table->string('arrive_station', 100);
            $table->date('date');
            $table->time('departure_time', $precision = 0);
            $table->time('arrive_time', $precision = 0);
            $table->string('train_code', 6);
            $table->tinyInteger('cab_number')->unsigned();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
