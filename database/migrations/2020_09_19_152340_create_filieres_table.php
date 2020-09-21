<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::disableForeignKeyConstraints();
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id-dep'); 
            $table->foreign('id-dep') 
                ->references('id') 
                ->on('departements') 
                ->onDelete('restrict') 
                ->onUpdate('restrict');

            $table->string('item-fil');
            $table->softDeletes();
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
        Schema::dropIfExists('filieres');
    }
}
