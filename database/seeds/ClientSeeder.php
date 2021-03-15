<?php

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
        $data = [
            [
                'name' => 'Fighter',
                'address' => 'Chou',
                'phone' => '09201516888',
                'capitalization' => 80000,
                'loan' => 10000
            ],
            [
                'name' => 'Support',
                'address' => 'Estes',
                'phone' => '09833678934',
                'capitalization' => 300000,
                'loan' => 100000
            ],
            [
                'name' => 'Mage',
                'address' => 'Kagura',
                'phone' => '09783494477',
                'capitalization' => 500000,
                'loan' => 70000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
