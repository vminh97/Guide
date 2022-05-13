<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(HastangTableSeeder::class);
        $this->call(NewTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(OrderdetailTableSeeder::class);
    }
}
