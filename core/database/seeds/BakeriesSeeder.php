<?php

use Illuminate\Database\Seeder;

class BakeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Bakery::class)->create();
    }
}
