@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список категорий новостей</h1>
        <a href="{{route('admin.categories.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить категорию</a>
    </div>
    <div class="row">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
    @endif
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>#ID</th>
    <th>Заголовок</th>
    <th>Дата добавления</th>
    <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @forelse($categories as $category)
    <tr id="{{$category->id}}}">
    <td>{{$category->id}}</td> 
    <td>{{$category->title}}</td>
    <td>{{$category-> created_at}}</td>
    <td><a href="{{route('admin.categories.edit', ['category' => $category])}}">Ред.</a></td>
    <td class=" text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['admin.categories.destroy', $category->id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
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

