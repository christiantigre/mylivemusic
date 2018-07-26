<?php

use Illuminate\Database\Seeder;
use App\category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create( [
'id'=>1,
'category'=>'Orquestas',
'detall'=>'Orquestas',
'active'=>1
] );

			

Category::create( [
'id'=>2,
'category'=>'Grupos',
'detall'=>'Grupos',
'active'=>1
] );

			

Category::create( [
'id'=>3,
'category'=>'Mariachis',
'detall'=>'Mariachis',
'active'=>1
] );

			

Category::create( [
'id'=>4,
'category'=>'Sinfónicos',
'detall'=>'Sinfónicos',
'active'=>1
] );

			

Category::create( [
'id'=>5,
'category'=>'Percución',
'detall'=>'Percución',
'active'=>1
] );

			

Category::create( [
'id'=>6,
'category'=>'Cantantes solistas',
'detall'=>'Cantantes solistas',
'active'=>1
] );

			

Category::create( [
'id'=>7,
'category'=>'Imitador',
'detall'=>'Imitador',
'active'=>1
] );

			

Category::create( [
'id'=>8,
'category'=>'Guitarrista',
'detall'=>'Guitarrista',
'active'=>1
] );

			

Category::create( [
'id'=>9,
'category'=>'Tributos',
'detall'=>'Tributos',
'active'=>1
] );
    }
}
