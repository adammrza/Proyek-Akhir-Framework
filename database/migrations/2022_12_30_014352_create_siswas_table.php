<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nis');
            $table->string('foto_profil');
            $table->string('nama_siswa');
            $table->integer('umur');
            $table->string('kelas');
            $table->text('alamat');
            $table->string('email', 50);
            $table->string('no_telp');
            $table->string('nama_ortu');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswas');
    }
}
