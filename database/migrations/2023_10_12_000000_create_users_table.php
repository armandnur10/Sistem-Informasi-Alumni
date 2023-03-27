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
            $table->string('name');
            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onDelete('cascade'); 
            $table->string('email');
            $table->enum('level', ['admin', 'siswa'])->nullable()->default('siswa');
            $table->string('password');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('nisn')->unique;
            $table->integer('angkatan');
            $table->text('alamat');
            $table->enum('status', ['kerja', 'kuliah', 'kosong'])->default('kosong');
            $table->string('photo')->nullable();
            $table->Integer('id_jurusan')->unsigned()->nullable();
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
