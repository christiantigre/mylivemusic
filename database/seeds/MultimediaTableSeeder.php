<?php

use Illuminate\Database\Seeder;
use App\Multimedia as Multimedium;

class MultimediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Multimedium::create( [
'id'=>1,
'multimedia'=>'Audio',
'active'=>1,
'created_at'=>'2018-08-04 20:38:07',
'updated_at'=>'2018-08-04 20:38:07'
] );

			

Multimedium::create( [
'id'=>2,
'multimedia'=>'Imagen',
'active'=>1,
'created_at'=>'2018-08-04 20:38:17',
'updated_at'=>'2018-08-04 20:38:17'
] );

			

Multimedium::create( [
'id'=>3,
'multimedia'=>'Video',
'active'=>1,
'created_at'=>'2018-08-04 20:38:54',
'updated_at'=>'2018-08-04 20:38:54'
] );

			

Multimedium::create( [
'id'=>4,
'multimedia'=>'Documento',
'active'=>1,
'created_at'=>'2018-08-04 20:39:05',
'updated_at'=>'2018-08-04 20:39:05'
] );

			

Multimedium::create( [
'id'=>5,
'multimedia'=>'Flash',
'active'=>1,
'created_at'=>'2018-08-04 20:39:15',
'updated_at'=>'2018-08-04 20:39:15'
] );

			


    }
}
