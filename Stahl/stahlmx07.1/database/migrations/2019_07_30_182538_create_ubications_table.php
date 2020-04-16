<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street',100);
            $table->string('colony',100);
            $table->string('located',100);
            $table->unsignedBigInteger('idTitle');
            $table->foreign('idTitle')
                  ->references('id')
                  ->on('titles')
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
        Schema::dropIfExists('ubications');
    }
}
