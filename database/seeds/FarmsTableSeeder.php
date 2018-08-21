<?php

use App\Farm;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;



class FarmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      
         $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('farms')->insert([
	            'category_id' => $faker->randomDigit,
	            'name' => $faker->word,
	            'producer' => $faker->word,
	            'picture' => $faker->imageUrl($width = 200, $height = 200),
	            'price' => $faker->randomNumber(4),
	            'due' => $faker->dateTime($max = 'now'),
	        ]);
    }
    }
}
