<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::get();
        return view('admin.forms.index', ['feedbacks' => $feedbacks]);
    }

    public function create()
    {
         
        return view('admin.forms.create');
        

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:2']

        ]);
        $data = $request->only(['name', 'comment']);   
        $feedback = Feedback::create($data); 
        if($feedback) {
            return redirect()->route('admin.forms.index')
            ->with('success', 'Запись успешно добавлена');
        }
        return back()->with('error', 'Не удалось добавить запись');
        
        }

    
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
    public function edit(Feedback $form)
    {
        return view('admin.forms.edit', ['form' => $form]);
    }

    
    public function update(Request $request, Feedback $form)
    {$data = $request->only(['name', 'comment']);
        $form->name = $data['name'];
        $form->comment = $data['comment'];
        $form->save();
        if($form) {
            return redirect()->route('admin.forms.index')
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
