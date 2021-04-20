@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Редактировать форму выгрузки</h2>
<form method="post" action="{{route('admin.form2.update', ['form2' => $form2])}}">
@csrf
@method('PUT')

<div class="form-group">
<label for="name">Имя</label>
<input type="text" id="name" name="name" class="form-control" value="{{$form2->name}}">
</div>
<div class="form-group">
<label for="tel">Номер телефона</label>
<input type="text" id="tel" name="tel" class="form-control" value="{{$form2->tel}}">
</div>
<div class="form-group">
<label for="tel">Email</label>
<input type="text" id="email" name="email" class="form-control" value="{{$form2->email}}">
</div>
<div class="form-group">
<label for="description">Что хочет получить</label>
<textarea type="text" id="description" name="description" class="form-control">{!!$form2->description!!}</textarea>
</div>
<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection