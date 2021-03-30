<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        return "<h2>Список в админке категорий новостей</h2>";
    }

    public function create()
    {
        return "<h2>Создаем в админке категорию</h2>";
    }

    public function store(Request $request)
    {
        //
    }

    public function show(int $id)
    {
        return "<h2>Показываем в админке список статей по категории с ID = {$id}</h2>";
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
