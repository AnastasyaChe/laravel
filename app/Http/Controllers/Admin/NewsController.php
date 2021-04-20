<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNews;
use App\Http\Requests\UpdateNews;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    
    public function index()
    {
        $news = News::select(['id', 'title', 'text', 'created_at'])
        ->get();
        return view('admin.news.index', ['news' => $news]);
    }

    public function create()
    {
         
        return view('admin.news.create');
        

    }

    
    public function store(CreateNews $request)
    {
        $news = News::create($request->validated()); //создаем в таблице строчку с отвалидированными данные
        if($news) {
            return redirect()->route('admin.news.index')->with('success', trans('messages.admin.news.create.success'));
        }
        //with ('success', "Запись успешно добавилась") чтобы не писать сообщения,
        // создаем файл resources/lang/ru/messages.php
        // trans можно заменить __
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "<h2>Отобразить в адмимнке запись одной статьи с ID = {$id}</h2>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    { 
        $categories = Category:: all();

        return view('admin.news.edit', [
            'news' => $news,
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNews $request, News $news) {
        $news = $news->fill($request->validated());
        $news->category_id = $request->validated()['category_id'];
        if($news->save()) {
            return redirect()->route('admin.news.index')
            ->with('success', __('message.admin.news.update.success'));
        }
        return back()->with('error', __('message.admin.news.update.fail'));
        
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
