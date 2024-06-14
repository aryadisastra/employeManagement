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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->integer('leader_id')->nullable(true);
            $table->integer('divisi_id');
            $table->integer('jabatan_id');
            $table->string('nama');
            $table->string('tempat_lahir')->nullable(true);
            $table->date('tanggal_lahir')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('kontak')->nullable(true);
            $table->string('jenis_kelamin');
            $table->text('alamat')->nullable(true);
            $table->date('tanggal_bergabung');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
