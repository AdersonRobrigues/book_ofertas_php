<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookcmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookcm', function (Blueprint $table){
            $table->id();
            $table->string('operador');
            $table->string('tp_energia');
            $table->string('inicio');
            $table->string('fim');
            $table->decimal('volume',9,6);
            $table->decimal('preco',7,2);
            $table->string('submercado');
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
        Schema::dropIfExists('bookcm');
    }
}
