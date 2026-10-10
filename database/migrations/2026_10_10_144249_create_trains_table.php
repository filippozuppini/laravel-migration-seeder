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
            $table->string('company', 50);
            $table->string('start_station', 50);
            $table->string('end_station', 50);
            $table->dateTime('leave_time');
            $table->dateTime('arrive_time');
            $table->string('code', 50);
            $table->integer('tot_carriage');
            $table->boolean('is_late')->default(false);
            $table->boolean('is_deleted')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
