<?php

use App\Catalog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;

class CatalogsTableSeeder extends Seeder
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
	        DB::table('catalogs')->insert([
	            'cover' => $faker->imageUrl($width = 200, $height = 200),
	            'name' => $faker->word,
	            'description' => $faker->word,
	            'created_at' => $faker->dateTime($max = 'now'),
               'updated_at' => $faker->dateTime($max = 'now'),
	        ]);
    }
}


}
