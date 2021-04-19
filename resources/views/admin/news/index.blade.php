@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список новостей</h1>
        <a href="{{route('admin.news.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить новость</a>
        <a href="{{route('admin.forms.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Форма обратной связи</a>
        <a href="{{route('admin.form2.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Форма заказа на получение выгрузки</a>
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
    @forelse($news as $newsItem)
    <tr>
    <td>{{$newsItem->id}}</td>
    <td>{{$newsItem->title}}</td>
    <td>{{$newsItem->created_at}}</td>
    <td><a href="{{route('admin.news.edit', ['news' =>$newsItem]}}">Ред.</a>&nbsp;<a href="">Удал.</a></td>
    </tr>
    @empty
    <tr>
        <td calspan="4"> Новостей нет</td>
    </tr>
    @endforelse
    </tbody></table>
    </div>

</div>
@endsection