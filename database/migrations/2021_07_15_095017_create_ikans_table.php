<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_ikan')->default('');
            $table->integer('harga');
            $table->string('penjual')->default('');
            $table->string('gambar_ikan')->default('');
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
        Schema::dropIfExists('ikans');
    }
}
