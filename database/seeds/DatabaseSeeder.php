<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountryTableSeeder::class);
        $this->call(EstateTableSeeder::class);
        $this->call(GenereTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PlaceTableSeeder::class);
    }
}
