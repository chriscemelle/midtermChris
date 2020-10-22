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
                'lname' => 'Cabudlan',
                'fname' =>  'Chris',
                'address' => 'Tubigon, Bohol',
                'phone' => '0963.123.4524',
                'email' => 'chris@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Cabudlan',
                'fname' => 'Jude',
                'address' => 'Tubigon, Bohol',
                'phone' => '0953.154.1357',
                'email' => 'jude@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Caresosa',
                'fname' => 'Marklie',
                'address' => 'Calape, Bohol',
                'phone' => '0913.117.1525',
                'email' => 'marklie@yahoo.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
