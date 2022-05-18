<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table-> string('nombre_producto');
            $table-> string('descripcion');
            $table-> string('nombre_categoria');
            $table-> decimal( 'precio');
            $table-> integer('stock');
            $table->timestamps();
            $table->unsignedBigInteger('categoria_id');
            $table ->foreign('categoria_id')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
