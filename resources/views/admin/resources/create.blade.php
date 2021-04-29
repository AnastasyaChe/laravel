@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Добавить </h2>
<form method="post" action="{{route('admin.resources.store')}}">
@csrf

<div class="form-group">
<label for="url">Url</label>
<input type="text" id="url" name="url" class="form-control">
</div>

<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection