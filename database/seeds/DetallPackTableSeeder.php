<?php

use Illuminate\Database\Seeder;
use App\Detallpack;

class DetallPackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detallpack::create( [
'id'=>1,
'item_pack'=>'Almacenamiento de 3 videos',
'active'=>1,
'typepack_id'=>1,
'created_at'=>'2018-08-04 20:13:49',
'updated_at'=>'2018-08-04 20:14:38'
] );

			

Detallpack::create( [
'id'=>2,
'item_pack'=>'Almacenamiento de 10 Fotos',
'active'=>1,
'typepack_id'=>1,
'created_at'=>'2018-08-04 20:15:03',
'updated_at'=>'2018-08-04 20:15:03'
] );

			

Detallpack::create( [
'id'=>3,
'item_pack'=>'Almacenamiento de 15 Canciones',
'active'=>1,
'typepack_id'=>1,
'created_at'=>'2018-08-04 20:15:16',
'updated_at'=>'2018-08-04 20:15:16'
] );

			

Detallpack::create( [
'id'=>4,
'item_pack'=>'Almacenamiento de 6 videos',
'active'=>1,
'typepack_id'=>2,
'created_at'=>'2018-08-04 20:15:57',
'updated_at'=>'2018-08-04 20:15:57'
] );

			

Detallpack::create( [
'id'=>5,
'item_pack'=>'Almacenamiento de 20 Fotos',
'active'=>1,
'typepack_id'=>2,
'created_at'=>'2018-08-04 20:16:16',
'updated_at'=>'2018-08-04 20:16:16'
] );

			

Detallpack::create( [
'id'=>6,
'item_pack'=>'Almacenamiento de 20 Canciones',
'active'=>1,
'typepack_id'=>2,
'created_at'=>'2018-08-04 20:16:28',
'updated_at'=>'2018-08-04 20:16:28'
] );

			

Detallpack::create( [
'id'=>7,
'item_pack'=>'Almacenamiento de 10 videos',
'active'=>1,
'typepack_id'=>3,
'created_at'=>'2018-08-04 20:16:48',
'updated_at'=>'2018-08-04 20:16:48'
] );

			

Detallpack::create( [
'id'=>8,
'item_pack'=>'Almacenamiento de 30 Fotos',
'active'=>1,
'typepack_id'=>3,
'created_at'=>'2018-08-04 20:17:07',
'updated_at'=>'2018-08-04 20:17:07'
] );

			

Detallpack::create( [
'id'=>9,
'item_pack'=>'Almacenamiento de 30 Canciones',
'active'=>1,
'typepack_id'=>3,
'created_at'=>'2018-08-04 20:17:25',
'updated_at'=>'2018-08-04 20:17:25'
] );

			

Detallpack::create( [
'id'=>10,
'item_pack'=>'Almacenamiento ilimitado de Videos',
'active'=>1,
'typepack_id'=>4,
'created_at'=>'2018-08-04 20:17:53',
'updated_at'=>'2018-08-04 20:17:53'
] );

			

Detallpack::create( [
'id'=>11,
'item_pack'=>'Almacenamiento ilimitado de Fotos',
'active'=>1,
'typepack_id'=>4,
'created_at'=>'2018-08-04 20:18:20',
'updated_at'=>'2018-08-04 20:18:20'
] );

			

Detallpack::create( [
'id'=>12,
'item_pack'=>'Almacenamiento ilimitado de Canciones',
'active'=>1,
'typepack_id'=>4,
'created_at'=>'2018-08-04 20:18:30',
'updated_at'=>'2018-08-04 20:18:30'
] );
    }
}
