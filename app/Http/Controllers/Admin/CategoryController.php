<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = (new Category())->getCategories(true);
        return view('admin.news.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function edit(int $id)
    {
        return "<h2>Редактируем в админке список статей по категории с ID = {$id}</h2>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
