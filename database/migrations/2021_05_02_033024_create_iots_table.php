<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iots', function (Blueprint $table) {
            $table->id();
            $table->string('nameIot');        
            $table->string('status',1);
            $table->unsignedBigInteger('distributor_id');   
            $table->timestamps();
            
            $table->foreign('distributor_id')->references('id')->on('distributors')
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
        Schema::dropIfExists('iots');
    }
}
