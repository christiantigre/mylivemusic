<?php

use Illuminate\Database\Seeder;
use App\Estate;

class EstateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Estate::create( [
    		'estate'=>'Aguascalientes',
    		'detall'=>'	AGS	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Baja',
    		'detall'=>' California	BCN	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Baja',
    		'detall'=>' California Sur	BCS	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Campeche',
    		'detall'=>'	CAM	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Chiapas',
    		'detall'=>'	CHP	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Chihuahua',
    		'detall'=>'	CHI	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Ciudad',
    		'detall'=>' de México	DIF',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Coahuila',
    		'detall'=>'	COA	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Colima',
    		'detall'=>'	COL',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Durango',
    		'detall'=>'	DUR	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Guanajuato',
    		'detall'=>'	GTO	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Guerrero',
    		'detall'=>'	GRO	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Hidalgo',
    		'detall'=>'	HGO	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Jalisco',
    		'detall'=>'	JAL	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'México',
    		'detall'=>'	MEX	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Michoacán',
    		'detall'=>'	MIC	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Morelos',
    		'detall'=>'	MOR	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Nayarit',
    		'detall'=>'	NAY',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Nuevo',
    		'detall'=>' León	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Oaxaca',
    		'detall'=>'	OAX	 ',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Puebla',
    		'detall'=>'	PUE	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Querétaro',
    		'detall'=>'	QRO	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Quintana',
    		'detall'=>' Roo	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'San',
    		'detall'=>' Luis Potosí	SLP	 ',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Sinaloa',
    		'detall'=>'	SIN	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Sonora',
    		'detall'=>'	SON	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Tabasco',
    		'detall'=>'	TAB	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Tamaulipas',
    		'detall'=>'	TAM	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Tlaxcala',
    		'detall'=>'	TLX	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Veracruz',
    		'detall'=>'	VER	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Yucatán',
    		'detall'=>'	YUC	',
    		'active'=>1,
    		'country_id'=>1
    	] );

    	

    	Estate::create( [
    		'estate'=>'Zacatecas',
    		'detall'=>'	ZAC	',
    		'active'=>1,
    		'country_id'=>1
    	] );


    	Estate::create( [
    		'estate'=>'AZUAY',
    		'country_id'=>2
    	] );

    	Estate::create( [
    		'estate'=>'BOLIVAR',
    		'country_id'=>2
    	] );

    	Estate::create( [
    		'estate'=>'CAÑAR',
    		'country_id'=>2
    	] );

    	
    	Estate::create( [
    		'estate'=>'CARCHI',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'COTOPAXI',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'CHIMBORAZO',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'EL ORO',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'ESMERALDAS',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'GUAYAS',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'IMBABURA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'LOJA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'LOS RIOS',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'MANABI',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'MORONA SANTIAGO',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'NAPO',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'PASTAZA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'PICHINCHA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'TUNGURAHUA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'ZAMORA CHINCHIPE',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'GALAPAGOS',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'SUCUMBIOS',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'ORELLANA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'SANTO DOMINGO DE LOS TSACHILAS',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'SANTA ELENA',
    		'country_id'=>2
    	] );
    	Estate::create( [
    		'estate'=>'ZONAS NO DELIMITADAS',
    		'country_id'=>2
    	] );



    }
}
