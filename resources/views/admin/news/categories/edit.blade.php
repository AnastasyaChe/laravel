@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Редактировать категорию</h2>
<form method="post" action="{{route('admin.categories.update', ['category' => $category])}}">
@csrf
@method('PUT')

<div class="form-group">
<label for="title">Наименование</label>
<input type="text" id="title" name="title" class="form-control" value="{{$category->title}}">
</div>

<div class="form-group">
<label for="description">Описание</label>
<textarea type="text" id="description" name="description" class="form-control">{!!$category->description !!}</textarea>
</div>

<div class="form-group">
<label for="is_vasible">Отображать</label>
<input type="checkbox" id="is_visible" name="is_visible" value="1"
@if($category->is_visible === true) checked @endif>
</div>
<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection