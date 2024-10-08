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
        Schema::create('people', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('email');
            $table->string('image')->nullable();
            $table->string('large_image')->nullable();
            $table->string('mobile');
            $table->string('position');
            $table->text('profile')->nullable();
            $table->string('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
