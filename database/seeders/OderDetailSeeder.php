<?php

namespace Database\Seeders;

use App\Models\OderDetail;
use Illuminate\Database\Seeder;

class OderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OderDetail::factory(5)->create();
    }
}
