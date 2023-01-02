<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id('id');
            $table->string('no_keg');
            $table->string('foto_profil');
            $table->string('nama_guru');
            $table->text('alamat');
            $table->string('email', 50);
            $table->string('no_telp');
            $table->string('mapel_yang_diampu');
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
        Schema::drop('gurus');
    }
}
