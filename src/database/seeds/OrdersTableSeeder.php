<?php

use App\Order;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            Order::create([
                'id' => Uuid::uuid4(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'status' => 'pending',
                'amount' => random_int(10, 200)
            ]);
        }
    }
}
