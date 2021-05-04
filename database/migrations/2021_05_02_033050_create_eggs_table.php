<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEggsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eggs', function (Blueprint $table) {
            $table->bigIncrements('id_egg');
            $table->integer('code');
            $table->string('weight');
            $table->unsignedBigInteger('iots_id');   
            $table->timestamps();
            
            $table->foreign('iots_id')->references('id_iot')->on('iots')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eggs');
    }
}
