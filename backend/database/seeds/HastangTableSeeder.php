<?php

use Illuminate\Database\Seeder;

class HastangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Hastang::class,10)->create();
    }
}
