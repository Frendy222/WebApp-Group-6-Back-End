<?php

use App\Plan;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // type, reward_exp, plan_description


        Plan::create([
            'type' => 'A',
            'reward_exp' => '10',
            'plan_description' => 'testing'
        ]);
    }
}
