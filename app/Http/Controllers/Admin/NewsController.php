<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    
    public function index()
    {
        $news = (new News())->getNews(true);
        return view('admin.news.index', ['news' => $news]);
    }

    public function create()
    {
         
        return view('admin.news.create');
        

    }

    
    public function store(Request $request)
    {
        $file = 'data.txt';
        
        $allowFields = $request->all();
        $fields = response()->json($allowFields);
        // Пишем содержимое в файл,
        // используя флаг FILE_APPEND для дописывания содержимого в конец файла
        // и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
        file_put_contents($file, $fields, FILE_APPEND);
        

        return redirect()->route('admin.news.index');
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
    public function edit($id)
    {
        return "<h2>Редактирование в адмимнке записи одной статьи с ID = {$id}</h2>";
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
