@extends('layouts.admin')
@section('content') 
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Обратная связь</h1>
        
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
    <th>Отзыв</th>
    <th>Дата обращения</th>
    </tr>
    </thead>
    <tbody>
    @forelse($feedbacks as $feedback)
    <tr>
    <td>{{$feedback->id}}</td> 
    <td>{{$feedback->name}}</td>
    <td>{{$feedback->comment}}</td>
    <td>{{$feedback-> created_at}}</td>
    <td><a href="{{route('admin.forms.edit', ['form' => $feedback]) }}">Ред.</a>&nbsp;<a href="">Удал.</a></td>
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