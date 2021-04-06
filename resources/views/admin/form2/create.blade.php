@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Форма на получение выгрузки товаров</h2>
@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
<form method="post" action="{{route('admin.form2.store')}}">
@csrf

<div class="form-group">
<label for="title">Имя загрузчика</label>
<input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
</div>
<div class="form-group">
<label for="title">Номер телефона</label>
<input type="text" id="tel" name="tel" class="form-control" value="{{old('tel')}}">
</div>
<div class="form-group">
<label for="title">E-mail</label>
<input type="text" id="e-mail" name="e-mail" class="form-control" value="{{old('e-mail')}}">
</div>
<div class="form-group">
<label for="description">Что хотите получить?</label>
<textarea type="text" id="description" name="description" class="form-control" value="{{old('description')}}"></textarea>
</div>
<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection