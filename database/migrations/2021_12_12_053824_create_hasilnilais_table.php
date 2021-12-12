<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilnilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilnilais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_alternatif');
            $table->integer('C1');
            $table->integer('C2');
            $table->integer('C3');
            $table->integer('C4');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('hasilnilais');
    }
}
