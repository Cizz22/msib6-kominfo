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
        Schema::create('house_holds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('individual_id')->constrained('individuals')->onDelete('cascade');
            $table->string('family_card_number');
            $table->string('address');
            $table->string('RT');
            $table->string('RW');
            $table->string('sub_district');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_holds');
    }
};
