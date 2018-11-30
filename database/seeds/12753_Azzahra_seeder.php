<?php

use Illuminate\Database\Seeder;

class 12753_Azzahra_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
{
     $faker = Faker\Factory::create(); //import library faker
	 
	 $limit = 5; //batasan berapa banyak data
	 
	 for ($i = 0; $i < $limit; $i++){
		 DB::table('12753_azzahra_models')->insert([ //mengisi data di database
		 'nama' => $faker->name,
		 'email' => $faker->unique()->email,//email unique sehingga tidak ada yg sama
		 'password' => $faker->password,
		 'macAdress' => $faker->macAdress,
	
	 ]);
    }
    }
}
