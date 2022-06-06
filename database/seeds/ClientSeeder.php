<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'email'=> 'diego@gmail.com',
            'password'=> bcrypt('diego123'),
         ]);
    }
}
