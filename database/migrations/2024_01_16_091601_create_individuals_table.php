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
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('sex', ['M', 'F']);
            $table->string('religion');
            $table->string('education');
            $table->string('profession');
            $table->string('marital_status');
            $table->string('citizenship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individuals');
    }
};
