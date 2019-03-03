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
        User::create([
        	'name' => 'Jorge', 
        	'email' => 'diazjorgeluis10@gmail.com', 
        	'password' => bcrypt('123123'),
        ]);

        User::create([
            'name' => 'Juan', 
            'email' => 'juan@test.com', 
            'password' => bcrypt('123123'),
        ]);

        User::create([
            'name' => 'Ramos', 
            'email' => 'ramos@test.com', 
            'password' => bcrypt('123123'),
        ]);
    }
}
