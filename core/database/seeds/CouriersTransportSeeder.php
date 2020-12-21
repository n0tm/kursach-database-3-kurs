<?php

use Illuminate\Database\Seeder;

class CouriersTransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\CourierTransport::class)->create();
    }
}
