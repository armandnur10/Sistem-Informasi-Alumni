<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('username')->nullable();
            $table->Integer('jurusan')->unsigned()->nullable();
            $table->foreign('jurusan')->references('id')->on('jurusan')->onDelete('cascade');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('nisn')->unique();
            $table->enum('level', ['admin', 'siswa'])->nullable()->default('siswa');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable();
            $table->integer('angkatan')->nullable();
            $table->text('alamat');
            $table->enum('status', ['kerja', 'kuliah', 'menganggur'])->default('menganggur');
            $table->enum('status_pernikahan', ['menikah', 'belum menikah'])->default('belum menikah');
            $table->string('tempat_kerja')->nullable();
            $table->string('tempat_kuliah')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable(); 
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('photo')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
