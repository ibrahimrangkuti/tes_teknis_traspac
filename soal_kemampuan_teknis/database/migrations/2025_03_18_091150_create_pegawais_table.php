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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('golongan');
            $table->string('eselon');
            $table->foreignId('jabatan_id')->constrained()->cascadeOnDelete();
            $table->string('tempat_tugas');
            $table->enum('agama', ['islam', 'kristen', 'hindu', 'buddha', 'konghucu']);
            $table->foreignId('unit_kerja_id')->constrained()->cascadeOnDelete();
            $table->string('no_hp');
            $table->string('npwp');
            $table->string('foto')->nullable()->default('default-profile.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
