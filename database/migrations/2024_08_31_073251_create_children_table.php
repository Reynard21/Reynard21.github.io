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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('foto')->nullable();
            $table->string('akte_lahir')->nullable();
            $table->string('imunisasi_lengkap')->nullable();
            $table->string('nama_ayah');
            $table->string('kerja_ayah');
            $table->string('hp_ayah');
            $table->string('email_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('kerja_ibu');
            $table->string('hp_ibu');
            $table->string('email_ibu')->nullable();
            $table->string('ktp_ayah');
            $table->string('ktp_ibu');
            $table->string('foto_kopi_kartu_keluarga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
