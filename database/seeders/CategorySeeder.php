<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker; 
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    protected function getData()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for($i = 0; $i < 5; $i++) {
            $data[] = [
                'title' => $faker->sentence(mt_rand(3,10)),
                'description' => $faker->text(mt_rand(100,300)),
                'is_visible' => $faker->boolean()
            ];
        }
        return $data;

    }
    public function run()
    {
        DB::table('categories')->insert($this->getData());
        
    }
}
