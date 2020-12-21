<?php

use Illuminate\Database\Seeder;

class BakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Baker::class)->create();
    }
}
