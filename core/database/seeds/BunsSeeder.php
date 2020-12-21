<?php

use Illuminate\Database\Seeder;

class BunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Bun::class)->create();
    }
}
