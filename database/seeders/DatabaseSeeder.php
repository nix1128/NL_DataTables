<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,50) as $index) {
            DB::table('employees')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'username' => $faker->username,
                'phone' => $faker->phoneNumber,


            ]);
        }

    }
}
