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
        // just to make 3 plan


        Plan::create([
            'type' => 'A',
            'reward_exp' => '10',
            'plan_description' => 'Smoke 3 cigarette a day.'
        ]);

        Plan::create([
            'type' => 'B',
            'reward_exp' => '20',
            'plan_description' => 'Smoke 2 cigarette a day.'
        ]);

        Plan::create([
            'type' => 'C',
            'reward_exp' => '50',
            'plan_description' => 'Smoke 1 cigarette a day.'
        ]);
    }
}
