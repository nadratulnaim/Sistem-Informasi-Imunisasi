<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayis', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('wilayah_id');
            $table->string('nama_bayi', 100);
            $table->string('slug', 100);
            $table->string('jenis_kelamin',20);
            $table->date('tanggal_lahir');
            $table->string('alamat', 100);
            $table->string('nama_orangtua', 100);
            $table->string('keterangan', 10);
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
        Schema::dropIfExists('bayis');
    }
}
