<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // household_id (foreign key yang merujuk ke tabel Households)
    // jenis_lantai (misalnya, keramik, tanah, kayu, dll.)
    // jenis_dinding (misalnya, tembok, bambu, kayu, dll.)
    // kondisi_atap (misalnya, genteng, asbes, seng, dll.)
    // sumber_air (misalnya, PDAM, sumur, air hujan, dll.)
    // sumber_listrik (misalnya, PLN, generator, solar, dll.)
    // fasilitas_buang_air (misalnya, septik tank, lubang tanah, sungai, dll.)
    // jumlah_kamar
    // jumlah_kamar_mandi
    // luas_rumah (dalam meter persegi)
    // akses_jalan (misalnya, aspal, tanah, batu, dll.)
    // jarak_ke_pusat_kota (dalam kilometer)
    // jarak_ke_sekolah_terdekat (dalam kilometer)
    // jarak_ke_puskesmas_terdekat (dalam kilometer)
    public function up(): void
    {
        Schema::create('house_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('house_hold_id')->constrained('house_holds')->onDelete('cascade');
            $table->string('luas_rumah');
            $table->string('jenis_lantai');
            $table->string('jenis_dinding');
            $table->string('kondisi_atap');
            $table->string('sumber_air');
            $table->string('sumber_listrik');
            $table->string('fasilitas_buang_air');
            $table->string('akses_jalan');
            $table->string('jarak_ke_pusat_kota');
            $table->string('jarak_ke_sekolah_terdekat');
            $table->string('jarak_ke_puskesmas_terdekat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_conditions');
    }
};
