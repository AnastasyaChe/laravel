@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список категорий новостей</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить категорию</a>
    </div>
    <div class="row">
    
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
    @forelse($categoryList as $id => $category)
    <tr>
    <td>{{$id}}</td> 
    <td><a href="{{ route('admin.categories.show', ['category' => $id])}}">{{$category}}</a></td>
    <td>{{now()}}</td>
    <td><a href="">Ред.</a>&nbsp;<a href="">Удал.</a></td>
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