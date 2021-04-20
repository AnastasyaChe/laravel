<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Form2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();
        return view('admin.form2.index', ['orders' => $orders]);
    }

    public function create()
    {
         
        return view('admin.form2.create');
        

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2'],
            'tel' => ['required', 'int', 'min:11'],
            'email' => ['required', 'string', 'min:4'],

        ]);
        $data = $request->only(['id', 'name', 'tel', 'email', 'description', 'created_at']);   
        $order = Order::create($data); 
        if($order) {
            return redirect()->route('admin.form2.index')
            ->with('success', 'Запись успешно добавлена');
        }
        return back()->with('error', 'Не удалось добавить запись');

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
    public function edit(Order $form2)
    {
        return view('admin.form2.edit', ['form2' => $form2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $form2)
    {
        $data = $request->only(['name', 'tel', 'email', 'description']);
        $form2->name = $data['name'];
        $form2->tel = $data['tel'];
        $form2->email = $data['email'];
        $form2->description = $data['description'];
        $form2->save();
        if($form2) {
            return redirect()->route('admin.form2.index')
            ->with('success', 'Запись успешно изменена');
        }
        return back()->with('error', 'Не удалось изменить запись');
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
