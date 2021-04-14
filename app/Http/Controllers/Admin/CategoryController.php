<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::where('is_visible', true)->get();
        return view('admin.news.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.news.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['title', 'description', 'is_visible']); 
        $category = Category::create($data);
        if($category) {
            return redirect()->route('admin.categories.index')
            ->with('success', 'Запись успешно добавлена');
        }
        return back()->with('error', 'Не удалось добавить запись');
    }

    public function show(int $category)
    {
            $newsOfCategory = [];
            foreach($this->newsList as $id =>$news) {
                if ($news['categoryId'] == $category) {
                    $newsOfCategory[$id] = $news;
                }
            }
                     
        return view('admin.news.categories.show', ['news' => $newsOfCategory]);
    }

    public function edit(Category $category)
    {
       return view('admin.news.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->only(['title', 'description', 'is_visible']);
        $category->title = $data['title'];
        $category->description = $data['description'];
        $category->save();
        if($category) {
            return redirect()->route('admin.categories.index')
            ->with('success', 'Запись успешно изменена');
        }
        return back()->with('error', 'Не удалось изменить запись');
    }

    public function destroy(int $category){
        
    $category = Category::findOrFail($category);
    $category->delete();
    return Redirect::route('admin.categories.index')
    ->with ('success', "Deleted");
    }
}
