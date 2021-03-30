<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
       return view('categories', ['categoryList' => $this->categoryList]);
    }
    public function show (int $categoryid) {
        $newsOfCategory = [];
        foreach($this->newsList as $id =>$news) {
            if ($news['categoryId'] == $categoryid) {
                $newsOfCategory[] = $news;
            }
        }
         return view('categoryShow', ['news' => $newsOfCategory]);
    }
}
