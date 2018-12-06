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
        	'name' => 'jorge', 
        	'email' => 'jorge@test.com', 
        	'password' => bcrypt('123123'),
        ]);
    }
}
