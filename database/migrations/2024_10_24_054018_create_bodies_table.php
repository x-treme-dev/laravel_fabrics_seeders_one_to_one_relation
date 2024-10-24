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
        Schema::create('bodies', function (Blueprint $table) {
            $table->id();
            $table->string('body_type');
              $table->unsignedBigInteger('mark_id');
            $table->foreign('mark_id')
              ->references('id')->on('marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodies');
    }
};
