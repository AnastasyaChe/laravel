<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class NewsSeeder extends Seeder
{
    protected function getData()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for($i = 0; $i < 10; $i++) {
            $title = $faker->sentence(mt_rand(3,10));
            $slug = Str::slug($title);
            $data[] = [
                'category_id' => 1,
                'source_id' => 3,
                'title' => $title,
                'slug' => $slug,
                'text' => $faker->text(mt_rand(100,300))                
            ];
        }
        return $data;

    }
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }
}



