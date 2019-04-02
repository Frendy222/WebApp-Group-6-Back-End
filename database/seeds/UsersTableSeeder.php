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
        //create faker as a factory
        $faker = \Faker\Factory::create();

        // choice for the gender
        $genderType = ['Male', 'Female'];
        
        // create admin
        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'smokoff@admin.com',
            'password' => bcrypt('admin'),
            'birthday' => $faker->date,
            'gender' => 'Male',
            'role_id' => 1,
            'exp' => 0,
            'level' => 1
        ]);

        // create 5 user aside admin by using faker
        for ($i = 0; $i < 5; $i++){
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'birthday' => $faker->date,
                'gender' => $genderType[rand(0,1)],
                'role_id' => 2,
                'exp' => 0,
                'level' => 1
            ]);
        }
    }
}
