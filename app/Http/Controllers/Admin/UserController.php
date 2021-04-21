<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNews;
use App\Http\Requests\UpdateNews;
use App\Http\Requests\UpdateUser;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'is_admin'])
        ->get();
        return view('admin.users.index', ['users' => $users]);
    }

    public function create()
    {
         
        return view('admin.user.create');
        

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    { 
        return view('admin.users.edit', [
            'user' => $user,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, User $user) {
        $user = $user->fill($request->validated());
                  
        if($user->save()) {
            return redirect()->route('admin.users.index')
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