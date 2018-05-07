<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Mood::class, 50)->create();
  //      $faker = Faker::create();

  //   	foreach (range(1,100) as $index) {
	 //        DB::table('moods')->insert([
	 //            'type' => $faker->randomElement($array = array ('good', 'bad', 'love')),
	 //        ]);
		// }
    }
}
