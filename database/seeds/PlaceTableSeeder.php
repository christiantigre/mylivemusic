<?php

use Illuminate\Database\Seeder;
use App\Placepresentation;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Placepresentation::create( [
'id'=>1,
'place'=>'Bares',
'detall'=>'Bares',
'active'=>1
] );

			

Placepresentation::create( [
'id'=>2,
'place'=>'Fiestas infantiles',
'detall'=>'Fiestas infantiles',
'active'=>1
] );

			

Placepresentation::create( [
'id'=>3,
'place'=>'Despedidas de solteros',
'detall'=>'Despedidas de solteros',
'active'=>1
] );

			


    }
}
