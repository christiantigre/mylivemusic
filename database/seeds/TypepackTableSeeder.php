<?php

use Illuminate\Database\Seeder;
use App\Typepack;

class TypepackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Typepack::create( [
'id'=>1,
'pack_type'=>'Basic',
'pack_price_suscription'=>'3',
'pack_price_month'=>'5',
'pack_detall'=>'Costo por almacenamiento de 3 videos, 10 Fotos y 15 Canciones. Costo $',
'active'=>1,
'created_at'=>'2018-08-04 06:24:16',
'updated_at'=>'2018-08-04 06:31:10'
] );

			

Typepack::create( [
'id'=>2,
'pack_type'=>'Médium',
'pack_price_suscription'=>'5',
'pack_price_month'=>'8',
'pack_detall'=>'Costo por almacenamiento de 6 videos, 20 Fotos y 20 Canciones. Costo $',
'active'=>1,
'created_at'=>'2018-08-04 06:30:47',
'updated_at'=>'2018-08-04 06:30:47'
] );

			

Typepack::create( [
'id'=>3,
'pack_type'=>'Plus',
'pack_price_suscription'=>'10',
'pack_price_month'=>'12',
'pack_detall'=>'Costo por almacenamiento de 10 videos, 30 Fotos y 30 Canciones. Costo $ Mostrar apartado para peticiones de canciones extra lo cual genera un cobro adicional por petición.',
'active'=>1,
'created_at'=>'2018-08-04 06:31:45',
'updated_at'=>'2018-08-04 06:31:45'
] );

			

Typepack::create( [
'id'=>4,
'pack_type'=>'Gold',
'pack_price_suscription'=>'15',
'pack_price_month'=>'18',
'pack_detall'=>'Costo por almacenamiento ilimitado de Videos,  Fotos y  Canciones.  Creación de Banners, Imágenes y Videos. (Opcional a futuro). Contactar con proveedores de (Luz, Sonido y Equipos). (Opcional a futuro).',
'active'=>1,
'created_at'=>'2018-08-04 06:34:36',
'updated_at'=>'2018-08-04 06:34:36'
] );
    }
}
