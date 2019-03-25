<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        $genderType = ['Male', 'Female'];
        $smokeStatus = ['Smoker', 'Non-smoker'];
        for ($i = 0; $i < 5; $i++){
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'age' => rand(17,35),
                'gender' => $genderType[rand(0,1)],
                'smoke_status' => $smokeStatus[rand(0,1)],
                'exp' => 0,
                'level' => 1
            ]);
        }
    }
}
