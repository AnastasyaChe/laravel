<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Enums\NewsStatusEnum;

class NewsController extends Controller
{
    public function index() {
        $news = News::with('category')
        ->where('status', NewsStatusEnum::PUBLISHED)
        ->get();
       return view('welcome', ['news' => $news]);
    }
    public function show (int $id) {
        $news = (new News())->getNewsById($id);
        return view('news.show', ['news' => $news]);
    }
   
      
    
}
