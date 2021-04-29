<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class ResourceController extends Controller
{
    
    public function index()
    {
        $resources = Resource::get();
        return view('admin.resources.index', ['resources' => $resources]);
    }

    public function create()
    {
        return view('admin.resources.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['url']);
        $resource = Resource::create($data);
        if($resource) {
            return redirect()->route('admin.resources.index')
            ->with('success', 'Запись успешно добавлена');
        }
        return back()->with('error', 'Не удалось добавить запись');
    }

  
    public function edit(Resource $resource)
    {
       return view('admin.resources.edit', ['resource' => $resource]);
    }

    public function update(Request $request, Resource $resource)
    {
        $data = $request->only(['url']);
        $resource->url = $data['url'];
        $resource->save();
        if($resource) {
            return redirect()->route('admin.resources.index')
            ->with('success', 'Запись успешно изменена');
        }
        return back()->with('error', 'Не удалось изменить запись');
    }

}
