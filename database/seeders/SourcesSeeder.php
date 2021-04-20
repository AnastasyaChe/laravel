<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker; 
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    protected function getData()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(mt_rand(3,10))
                
            ];
        }
        return $data;

    }
    public function run()
    {
        DB::table('sources')->insert($this->getData());
    }
}



