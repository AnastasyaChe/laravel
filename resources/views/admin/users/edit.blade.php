@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Редактировать пользователя</h2>
<form method="post" action="{{route('admin.users.update', ['user' => $user])}}">
@csrf
@method('PUT')

<div class="form-group">
<label for="title">Имя</label>
<input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
</div>

<div class="form-group">
<label for="description">Email</label>
<input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
</div>

<div class="form-group">
<label for="is_admin">Admin</label>
<input type="hidden" name="is_admin" value="0">
<input type="checkbox" id="is_admin" name="is_admin" value="1"
@if($user->is_admin === true) checked @endif>
</div>
<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection