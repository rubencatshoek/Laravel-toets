<?php

use Illuminate\Database\Seeder;

class OwlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Owl::class, 10)->create();
    }
}
