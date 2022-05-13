<?php
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
           factory(\App\Model\Category::class,10)->create();
    }
}
