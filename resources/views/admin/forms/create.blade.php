@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Форма обратной связи</h2>
@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
<form method="post" action="{{route('admin.forms.store')}}">
@csrf

<div class="form-group">
<label for="title">Имя пользователя</label>
<input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
</div>
<div class="form-group">
<label for="description">Комментарий/Отзыв</label>
<textarea type="text" id="comment" name="comment" class="form-control"value="{{old('comment')}}"></textarea>
</div>
<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection