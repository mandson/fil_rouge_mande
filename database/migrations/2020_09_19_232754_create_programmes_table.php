<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::disableForeignKeyConstraints();
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('heur-dM');
            $table->string('heur-fM');
            $table->string('heur-dS');
            $table->string('heur-fS');
            $table->integer('nbr-jours');
            $table->string('pdf');


            /******@FTK Clee etrangere de la table departement   */
                        
            $table->unsignedBigInteger('id-dep'); 
            $table->foreign('id-dep') 
                ->references('id') 
                ->on('departements') 
                ->onDelete('restrict') 
                ->onUpdate('restrict');

    /******@FTK Clee etrangere de la table lieu  */
                $table->unsignedBigInteger('id-lieu'); 
                $table->foreign('id-lieu') 
                    ->references('id') 
                    ->on('lieus') 
                    ->onDelete('restrict') 
                    ->onUpdate('restrict');
    
                    /******@FTK Clee etrangere de la table lieu  */
                    $table->unsignedBigInteger('id-cat'); 
                    $table->foreign('id-cat') 
                        ->references('id') 
                        ->on('categorie_progs') 
                        ->onDelete('restrict') 
                        ->onUpdate('restrict');

                         /******@FTK Clee etrangere de la table proffesseurs  */
                        $table->unsignedBigInteger('id-prof'); 
                        $table->foreign('id-prof') 
                            ->references('id') 
                            ->on('proffesseurs') 
                            ->onDelete('restrict') 
                            ->onUpdate('restrict');

                            $table->unsignedBigInteger('id-niv'); 
                            $table->foreign('id-niv') 
                                ->references('id') 
                                ->on('niveaux') 
                                ->onDelete('restrict') 
                                ->onUpdate('restrict');
                         
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
        Schema::dropIfExists('programmes');
    }
}
