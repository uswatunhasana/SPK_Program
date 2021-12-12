<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode',4);
            $table->string('nama_kategori',100);
            $table->integer('nilai')->length(2)->unsigned();;
            //relasi kriteria
            $table->unsignedInteger('kriteria_id')->nullable();
            $table->foreign('kriteria_id')
                ->on('kriterias')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('kategoris');
    }
}
