<?php

use Illuminate\Database\Seeder;
use App\Typepresentation;

class TypepresentationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Typepresentation::create( [
'id'=>1,
'pl_presentation'=>'Local',
'detall'=>'Presentacion in the area near group',
'active'=>1,
'created_at'=>'2018-08-04 09:14:08',
'updated_at'=>'2018-08-04 09:14:08'
] );

			

Typepresentation::create( [
'id'=>2,
'pl_presentation'=>'Nacional',
'detall'=>'Presentacion in the area nivel national',
'active'=>1,
'created_at'=>'2018-08-04 09:14:39',
'updated_at'=>'2018-08-04 09:14:39'
] );

			


    }
}
