<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayiImunisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayi_imunisasi', function (Blueprint $table) {
            $table->foreignId('bayi_id');
            $table->foreignId('imunisasi_id');
            $table->primary(['bayi_id', 'imunisasi_id']);
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayi_imunisasi');
    }
}
