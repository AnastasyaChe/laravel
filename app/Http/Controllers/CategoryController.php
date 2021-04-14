<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('news.categories.index', ['categories' => $categories]);
    }
    public function show (int $id) {
        
        $news = News::select(['news.id', 'news.title', 'news.text','news.created_at'])
        ->with('category')
        ->where('news.category_id', $id)
        ->get();
        
        
         return view('news.categories.show', ['news' => $news]);
    }
}

