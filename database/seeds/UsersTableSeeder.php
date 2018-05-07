<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class, 50)->create();
    	// $faker = Faker::create();

    	// foreach (range(1,100) as $index) {
	    //     DB::table('users')->insert([
	    //         'name' => $faker->name,
	    //         'email' => $faker->email,
	    //         'password' => bcrypt('secret'),
	    //         'gender' => $faker->randomElement($array = array ('male', 'female')) ,
	    //         'location' => $faker->city,
		// 	]);
		// }
    }
}
