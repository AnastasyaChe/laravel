@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Редактировать форму обратной связи</h2>
<form method="post" action="{{route('admin.forms.update', ['form' => $form])}}">
@csrf
@method('PUT')

<div class="form-group">
<label for="name">Имя</label>
<input type="text" id="name" name="name" class="form-control" value="{{$form->name}}">
</div>
<div class="form-group">
<label for="commr=ent">Отзыв</label>
<input type="text" id="comment" name="comment" class="form-control" value="{{$form->comment}}">
</div>

<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection