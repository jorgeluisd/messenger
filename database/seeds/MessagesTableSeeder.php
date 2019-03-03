<?php

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Message::create([
	        'from_id' => 1,
	        'to_id' => 2,
	        'content' => 'Hola como estas?',
    	]);

    	Message::create([
	        'from_id' => 2,
	        'to_id' => 1,
	        'content' => 'Muy bien gracias y tu?',
    	]);

        Message::create([
            'from_id' => 1,
            'to_id' => 3,
            'content' => 'Hola, tanto tiempo',
        ]);

        Message::create([
            'from_id' => 3,
            'to_id' => 1,
            'content' => 'Hola todo bien.',
        ]);
    }
}
