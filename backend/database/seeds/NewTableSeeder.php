<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = App\Model\User::select('id')->get();
        foreach(range(1,50) as $index){
            $new = App\Model\News::create([
                'title_news' => $faker->text,
                'description_news' => $faker->text,
                'content_news' => $faker->text ,
                'user_id' => $faker->randomElement($users),
                'editer_by' => 'Zackary Smith',
                'status' => rand(0,3),
                'news_Date'=> new Datetime,
                'news_image' => $faker->image,
                'category_id' => 1,
                'created_at'=> new Datetime,
                'updated_at'=> new Datetime,
            ]);
        }
    }
}
