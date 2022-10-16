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
                
                'user_id' => 2,
                'acct_name' => 'Ivan',
                'init_invest' => 1111.00,
                'start_date' => '2012-12-2',
                'remarks' => 'bruh',
            ],
            [
                
                'user_id' => 3,
                'acct_name' => 'Kien',
                'init_invest' => 2222.00,
                'start_date' => '2016-11-22',
                'remarks' => 'bruh',
            ],
            [
                
                'user_id' => 4,
                'acct_name' => 'Eman',
                'init_invest' => 3333.00,
                'start_date' => '2010-1-6',
                'remarks' => 'bruh',
            ],
        ];
        foreach($data as $a)
            \App\Account::create($a);
    }
}

