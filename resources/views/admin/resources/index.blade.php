@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список resources</h1>
        <a href="{{route('admin.resources.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить </a>
    </div>
    <div class="row">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
    @endif
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>#ID</th>
    <th>Url</th>
    <th>Дата добавления</th>
    <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @forelse($resources as $resource)
    <td>{{$resource->id}}</td> 
    <td>{{$resource->url}}</td>
    <td>{{$resource-> created_at}}</td>
    
    <td><a href="{{route('admin.resources.edit', ['resource' => $resource])}}">Ред.</a></td>
    <td><a href="{{route('admin.resources.parsprocess', ['id' => $resource->id])}}">Спарсить</a></td>
    </tr>
        
    @empty
    <tr>
        <td calspan="4">нет</td>
    </tr>
    @endforelse
    </tbody></table>
    </div>

</div>
@endsection