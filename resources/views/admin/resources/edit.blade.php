@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Редактировать </h2>
<form method="post" action="{{route('admin.resources.update', ['resource' => $resource])}}">
@csrf
@method('PUT')

<div class="form-group">
<label for="url">Url</label>
<input type="text" id="url" name="url" class="form-control" value="{{$resource->url}}">
</div>

<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection