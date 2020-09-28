<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idProvincia')->unsigned();
            $table->foreign('idProvincia')->references('id')->on('provincias');
            $table->string('nombreCiudad', 70);
        });

        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Cuenca'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Girón'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Gualaceo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Nabón'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Paute'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Pucara'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'San Fernando'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Santa Isabel'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Sigsig'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Oña'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Chordeleg'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'El Pan'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Sevilla De Oro'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Guachapala'));
        DB::table('ciudades')->insert(array('idProvincia'=>'1', 'nombreCiudad'=>'Camilo Ponce Enríquez'));

        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'Guaranda'));
        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'Chillanes'));
        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'Chimbo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'Echeandía'));
        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'San Miguel'));
        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'Caluma'));
        DB::table('ciudades')->insert(array('idProvincia'=>'2', 'nombreCiudad'=>'Las Naves'));


        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'Azogues'));
        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'Biblián'));
        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'Cañar'));
        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'La Troncal'));
        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'El Tambo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'Déleg'));
        DB::table('ciudades')->insert(array('idProvincia'=>'3', 'nombreCiudad'=>'Suscal'));

        
        DB::table('ciudades')->insert(array('idProvincia'=>'4', 'nombreCiudad'=>'Tulcán'));
        DB::table('ciudades')->insert(array('idProvincia'=>'4', 'nombreCiudad'=>'Bolívar'));
        DB::table('ciudades')->insert(array('idProvincia'=>'4', 'nombreCiudad'=>'Espejo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'4', 'nombreCiudad'=>'Mira'));
        DB::table('ciudades')->insert(array('idProvincia'=>'4', 'nombreCiudad'=>'Montúfar'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'4', 'nombreCiudad'=>'San Pedro De Huaca'));	

        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Riobamba'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Alausi'));
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Colta'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Chambo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Chunchi'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Guamote'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Guano'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Pallatanga'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Penipe'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'5', 'nombreCiudad'=>'Cumandá'));

        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'Latacunga'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'La Maná'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'Pangua'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'Pujili'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'Salcedo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'Saquisilí'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'6', 'nombreCiudad'=>'Sigchos'));		


        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Machala'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Arenillas'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Atahualpa'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Balsas'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Chilla'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'El Guabo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Huaquillas'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Marcabelí'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Pasaje'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Piñas'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Portovelo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Santa Rosa'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Zaruma'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'7', 'nombreCiudad'=>'Las Lajas'));		

        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'Esmeraldas'));
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'Eloy Alfaro'));
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'Muisne'));
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'Quinindé'));
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'San Lorenzo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'Atacames'));
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'Rioverde'));
        DB::table('ciudades')->insert(array('idProvincia'=>'8', 'nombreCiudad'=>'La Concordia'));

        DB::table('ciudades')->insert(array('idProvincia'=>'9', 'nombreCiudad'=>'San Cristóbal'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'9', 'nombreCiudad'=>'Isabela'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'9', 'nombreCiudad'=>'Santa Cruz'));	


        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Guayaquil'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Alfredo Baquerizo Moreno (Juján)'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Balao'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Balzar'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Colimes'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Daule'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Durán'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'El Empalme'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'El Triunfo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Milagro'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Naranjal'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Naranjito'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Palestina'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Pedro Carbo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Samborondón'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Santa Lucía'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Salitre (Urbina Jado)'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'San Jacinto De Yaguachi'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Playas'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Simón Bolívar'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Coronel Marcelino Maridueña'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Lomas De Sargentillo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Nobol'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'General Antonio Elizalde'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'10', 'nombreCiudad'=>'Isidro Ayora'));


        DB::table('ciudades')->insert(array('idProvincia'=>'11', 'nombreCiudad'=>'Ibarra'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'11', 'nombreCiudad'=>'Antonio Ante'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'11', 'nombreCiudad'=>'Cotacachi'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'11', 'nombreCiudad'=>'Otavalo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'11', 'nombreCiudad'=>'EsmeraldPimampiroas'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'11', 'nombreCiudad'=>'San Miguel De Urcuquí'));		


        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Loja'));
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Calvas'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Catamayo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Celica'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'EsmeraldChaguarpambaas'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Espíndola'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Gonzanamá'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Macará'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Paltas'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Puyango'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Saraguro'));
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Sozoranga'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Zapotillo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Pindal'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Quilanga'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'12', 'nombreCiudad'=>'Olmedo'));		

        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Babahoyo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Baba'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Montalvo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Puebloviejo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Quevedo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Urdaneta'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Ventanas'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Vínces'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Palenque'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Buena Fé'));		 
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Valencia'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Mocache'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'13', 'nombreCiudad'=>'Quinsaloma'));		

        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Portoviejo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Bolívar'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Chone'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'El Carmen'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Flavio Alfaro'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Jipijapa'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Junín'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Manta'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Montecristi'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Paján'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Manabí'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Rocafuerte'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Santa Ana'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Sucre'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Tosagua'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'24 De Mayo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Pedernales'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Olmedo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Puerto López'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Jama'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'Jaramijó'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'14', 'nombreCiudad'=>'San Vicente'));	

        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Morona'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Gualaquiza'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Limón Indanza'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Palora'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Santiago'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Sucúa'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Huamboya'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'San Juan Bosco'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Taisha'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Logroño'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Pablo Sexto'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'15', 'nombreCiudad'=>'Tiwintza'));		

        DB::table('ciudades')->insert(array('idProvincia'=>'16', 'nombreCiudad'=>'Tena'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'16', 'nombreCiudad'=>'Archidona'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'16', 'nombreCiudad'=>'El Chaco'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'16', 'nombreCiudad'=>'Quijos'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'16', 'nombreCiudad'=>'Carlos Julio Arosemena Tola'));		

        DB::table('ciudades')->insert(array('idProvincia'=>'17', 'nombreCiudad'=>'Orellana'));
        DB::table('ciudades')->insert(array('idProvincia'=>'17', 'nombreCiudad'=>'Aguarico'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'17', 'nombreCiudad'=>'La Joya De Los Sachas'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'17', 'nombreCiudad'=>'Loreto'));		



        DB::table('ciudades')->insert(array('idProvincia'=>'18', 'nombreCiudad'=>'Pastaza'));
        DB::table('ciudades')->insert(array('idProvincia'=>'18', 'nombreCiudad'=>'Mera'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'18', 'nombreCiudad'=>'Santa Clara'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'18', 'nombreCiudad'=>'Arajuno'));	

        DB::table('ciudades')->insert(array('idProvincia'=>'19', 'nombreCiudad'=>'Santa Elena'));
        DB::table('ciudades')->insert(array('idProvincia'=>'19', 'nombreCiudad'=>'La Libertad'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'19', 'nombreCiudad'=>'Salinas'));		

        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Quito'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Cayambe'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Mejia'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Pedro Moncayo'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Rumiñahui'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'San Miguel De Los Bancos'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Pedro Vicente Maldonado'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'20', 'nombreCiudad'=>'Puerto Quito'));	

        DB::table('ciudades')->insert(array('idProvincia'=>'21', 'nombreCiudad'=>'Santo Domingo'));

        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Lago Agrio'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Gonzalo Pizarro'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Putumayo'));
        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Shushufindi'));
        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Sucumbíos'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Cascales'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'22', 'nombreCiudad'=>'Cuyabeno'));		


        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Ambato'));
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Baños De Agua Santa'));
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Cevallos'));
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Mocha'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Patate'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Quero'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'San Pedro De Pelileo'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Santiago De Píllaro'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'23', 'nombreCiudad'=>'Tisaleo'));	

        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Zamora'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Chinchipe'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Nangaritza'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Yacuambi'));
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Yantzaza (Yanzatza)'));		
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'El Pangui'));	
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Centinela Del Cóndor'));
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Palanda'));
        DB::table('ciudades')->insert(array('idProvincia'=>'24', 'nombreCiudad'=>'Paquisha'));	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
