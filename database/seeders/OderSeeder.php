<?php

namespace Database\Seeders;

use App\Models\Oder;
use Illuminate\Database\Seeder;

class OderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oder::factory(10)->create();
    }
}
