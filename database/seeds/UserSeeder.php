<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Diego Torres',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('admin123'),
         ]);
    }
}
// bcrypt('12345678')