<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        //
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
        $file = 'data.txt';
        $allowFields = $request->all();
        foreach($allowFields as $key => $item) {
            $field = "\n" . $key . "=>" . $item . "\n" ;
            file_put_contents($file, $field, FILE_APPEND);
        }
        
        // $fields = response()->json($allowFields);
        // file_put_contents($file, $fields, FILE_APPEND);
        

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
        //
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
