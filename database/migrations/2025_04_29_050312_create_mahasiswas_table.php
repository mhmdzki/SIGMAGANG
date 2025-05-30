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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->float('ipk');
            $table->enum('preferensi_lokasi', ['malang','luar malang']);
            $table->string('nim')->unique();
            $table->string('no_telp');
            $table->integer('semester');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('prodi_id')->unsigned()->nullable();
            $table->bigInteger('jenis_magang_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('jenis_magang_id')->references('id')->on('jenis_magang')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
