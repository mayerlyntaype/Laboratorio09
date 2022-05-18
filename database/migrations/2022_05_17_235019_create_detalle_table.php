<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->id();
            $table-> integer('cantidad');
            $table-> decimal('precio_total');
            $table->timestamps();
            $table->unsignedBigInteger('producto_id');
            $table ->foreign('producto_id')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle');
    }
}
