<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreProvincia', 70);


        });

        DB::table('provincias')->insert(array('nombreProvincia'=>'Azuay'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Bolivar'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Cañar'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Carchi'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Chimborazo'));

        DB::table('provincias')->insert(array('nombreProvincia'=>'Cotopaxi'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'El Oro'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Esmeraldas'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Galápagos'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Guayas'));

        DB::table('provincias')->insert(array('nombreProvincia'=>'Imbabura'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Loja'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Los Ríos'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Manabí'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Morona Santiago'));

        DB::table('provincias')->insert(array('nombreProvincia'=>'Napo'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Orellana'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Pastaza'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Santa Elena'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Pichincha'));

        DB::table('provincias')->insert(array('nombreProvincia'=>'Santo Domingo de los Tsáchilas'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Sucumbíos'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Tungurahua'));
        DB::table('provincias')->insert(array('nombreProvincia'=>'Zamora Chinchipe'));

       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
