<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Cabudlan B. Regular Account',
                'init_invest' => 31000,
                'start_date' => '2020-02-05',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' =>  2,
                'acct_name' => 'Cabudlan Trust Fund',
                'init_invest' => 800000,
                'start_date' => '2020-02-21',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Caresosa B. Regular Account',
                'init_invest' => 110000,
                'start_date' => '2020-04-20',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acct) {
            \App\Account::create($acct);
        }
    }
}