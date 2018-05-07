<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Media::class, 100)->create();
  
  //     $faker = Faker::create();
      
  //    	foreach (range(1,100) as $index) {
	 //        DB::table('media')->insert([
	 //            'type' => $faker->randomElement($array = array ( 'video', 'photo')),

	 //        ]);
		// }
    }
}
