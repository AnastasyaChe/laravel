<?php

namespace Tests\Feature;

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\Controller;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_categories()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }
    public function test_show_categories() {
        $categoryId = mt_rand(0,5);
        $db = new CategoryController();
        $data = $db->show($categoryId);
        $this->assertNotEmpty($data);
        foreach ($data as $item) {
            $this->assertEquals($categoryId, $item['categoryId']);
        }
    }
    public function test_one_categories()
    {
        $categoryId = mt_rand(0,5);
        $response = $this->get('/categories/show/' .  $categoryId);

        $response->assertStatus(200);
    }
    public function test_name_of_news()
    {
        $arrNews = (new Controller())->getNewsList();
        
         $db_title = $arrNews[1]['title'];
 
        $response = $this->get('/');
 
        $response->assertStatus(200);
        $response->assertSeeText($db_title);
    }

}
