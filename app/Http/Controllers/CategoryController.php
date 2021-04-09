<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = (new Category())->getCategories();
        return view('news.categories.index', ['categories' => $categories]);
    }
    public function show (int $categoryid) {
        $newsOfCategory = [];
        foreach($this->newsList as $id =>$news) {
            if ($news['categoryId'] == $categoryid) {
                $newsOfCategory[$id] = $news;
            }
        }
         return view('categoryShow', ['news' => $newsOfCategory]);
    }
}

