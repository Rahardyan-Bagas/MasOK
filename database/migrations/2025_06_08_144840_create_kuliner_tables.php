<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        // Tabel User
        Schema::create('user', function (Blueprint $table) {
            $table->id('Id_User');
            $table->string('Nama_User', 100);
            $table->string('Email', 100)->unique();
            $table->string('Password', 255);
            $table->timestamps();
        });

        // Tabel Daerah
        Schema::create('daerah', function (Blueprint $table) {
            $table->id('Id_Daerah');
            $table->string('Nama_Daerah', 100);
            $table->string('Provinsi', 100)->nullable();
            $table->timestamps();
        });

        // Tabel Makanan
        Schema::create('makanan', function (Blueprint $table) {
            $table->id('Id_Makanan');
            $table->string('Nama_Makanan', 100);
            $table->text('Deskripsi')->nullable();
            $table->string('Gambar')->nullable();
            $table->unsignedBigInteger('Id_Daerah')->nullable();
            $table->foreign('Id_Daerah')->references('Id_Daerah')->on('daerah')->onDelete('set null');
            $table->timestamps();
        });

        // Tabel Resep
        Schema::create('resep', function (Blueprint $table) {
            $table->id('Id_Resep');
            $table->unsignedBigInteger('Id_Makanan');
            $table->text('Bahan');
            $table->text('Cara_Memasak');
            $table->foreign('Id_Makanan')->references('Id_Makanan')->on('makanan')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel Lokasi
        Schema::create('lokasi', function (Blueprint $table) {
            $table->id('Id_Lokasi');
            $table->string('GambarResto')->nullable();
            $table->string('Nama_Tempat', 100);
            $table->string('Kota', 100)->nullable();
            $table->string('Provinsi', 100)->nullable();
            $table->text('Alamat')->nullable();
            $table->timestamps();
        });

        // Tabel Ulasan
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id('Id_Ulasan');
            $table->unsignedBigInteger('Id_User');
            $table->unsignedBigInteger('Id_Makanan');
            $table->text('Komentar')->nullable();
            $table->date('Tanggal_Ulasan')->nullable();
            $table->integer('Rating')->nullable()->checkBetween(1, 5);
            $table->foreign('Id_User')->references('Id_User')->on('user')->onDelete('cascade');
            $table->foreign('Id_Makanan')->references('Id_Makanan')->on('makanan')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('makanan_lokasi', function (Blueprint $table) {
            $table->unsignedBigInteger('Id_Makanan');
            $table->unsignedBigInteger('Id_Lokasi');
            $table->primary(['Id_Makanan', 'Id_Lokasi']);
            $table->foreign('Id_Makanan')->references('Id_Makanan')->on('makanan')->onDelete('cascade');
            $table->foreign('Id_Lokasi')->references('Id_Lokasi')->on('lokasi')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('makanan_lokasi');
        Schema::dropIfExists('ulasan');
        Schema::dropIfExists('lokasi');
        Schema::dropIfExists('resep');
        Schema::dropIfExists('makanan');
        Schema::dropIfExists('daerah');
        Schema::dropIfExists('user');

    }
};
