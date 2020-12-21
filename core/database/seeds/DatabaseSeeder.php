<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CouriersTransportSeeder::class);
         $this->call(CouriersSeeder::class);
         $this->call(DiscountCardsSeeder::class);
         $this->call(ClientsSeeder::class);
         $this->call(BakeriesSeeder::class);
         $this->call(BakersSeeder::class);
         $this->call(BunsSeeder::class);
         $this->call(DirectorsSeeder::class);
         $this->call(OrdersSeeder::class);
         $this->call(UserSeeder::class);
    }
}
