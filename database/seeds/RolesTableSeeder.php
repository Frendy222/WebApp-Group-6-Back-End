<?php
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // just to make 2 role

        Role::create([
            'role' => 'admin'
        ]);
        Role::create([
            'role' => 'user'
        ]);
        
    }
}
