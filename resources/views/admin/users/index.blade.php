@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список пользователей</h1>
        <a href="{{route('admin.categories.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить пользователя</a>
    </div>
    <div class="row">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
    @endif
    <table class="table table-bordered">
    <thead>
    <tr>
    <th>#ID</th>
    <th>Имя</th>
    <th>Email адрес</th>
    <th>Дата добавления</th>
    <th>Администратор</th>
    <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
    <td>{{$user->id}}</td> 
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user-> created_at}}</td>
    <td><input type="checkbox" id="is_visible" name="is_visible" value="1"
    @if($user->is_admin == true) checked @endif</td>
    <td><a href="{{route('admin.users.edit', ['user' => $user])}}">Ред.</a></td>
    <td class=" text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['admin.users.destroy', $user->id]
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