<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $originSuppliersData = [
            [
                'name' => 'CCTV',
                'platform' => '微博',
                'price' => 50,
                'subscriber_amount' => 100,
                'intro' => '这是 cctv 的官方微博'
            ]
        ];

        foreach ($originSuppliersData as $supplier) {
            factory(\App\Supplier::class, 1)->create([
                'name' => $supplier['name'],
                'platform' => $supplier['platform'],
                'price' => $supplier['price'],
                'subscriber_amount' => $supplier['subscriber_amount'],
                'intro' => ''
            ]);
        }
    }
}
