@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Выгрузка товаров</h1>
        
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
    <th>Номер телефона</th>
    <th>e-mail</th>
    <th>Что хочет получить</th>
    <th>Дата обращения</th>

    </tr>
    </thead>
    <tbody>
    @forelse($orders as $order)
    <tr>
    <td>{{$order->id}}</td> 
    <td>{{$order->name}}</td>
    <td>{{$order->tel}}</td>
    <td>{{$order->email}}</td>
    <td>{{$order->description}}</td>
    <td>{{$order->created_at}}</td>
    <td><a href="{{route('admin.form2.edit', ['form2' => $order]) }}">Ред.</a>&nbsp;<a href="">Удал.</a></td>
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