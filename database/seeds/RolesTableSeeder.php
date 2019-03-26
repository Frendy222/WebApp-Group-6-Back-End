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
        // $role_list = ['admin','user'];

        Role::create([
            'role' => 'admin'
        ]);
        Role::create([
            'role' => 'user'
        ]);
        
    }
}
