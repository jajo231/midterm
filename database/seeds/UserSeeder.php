<?php

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
        $data = [
            [
                'id' => 2,
                'lname' => 'Pongase',
                'fname' => 'John Ivan',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09303339709',
                'email'=> 'sumipo231@gmail.com',
                'password' => bcrypt('password1234')
            ],
            [
                'id' => 3,
                'lname' => 'Pongase',
                'fname' => 'Ilton',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09303339700',
                'email'=> 'Ilton@gmail.com',
                'password' => bcrypt('pasword123')
            ],
            [
                'id' => 4,
                'lname' => 'Pongase',
                'fname' => 'Arielle',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09303339720',
                'email'=> 'Arielle@gmail.com',
                'password' => bcrypt('pasword12342')
            ]
        ];

        foreach($data as $u) {
            \App\User::create($u);
        }
    }
}