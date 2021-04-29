@extends('layouts.main')
@section('content')

<div class="row">
<div class="col-8 offset-2">
<h2 id='name'>Редактировать новость</h2>
<form method="post" action="{{route('admin.news.store')}}" 
    enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="category">Категория</label>
<select class="form-control" id="category" name="category_id">
<option value="0"> Выбрать категорию</option>
@foreach($categories as $category)
<option value="{{$category->id}}" @if($category->id === $news->category_id)
selected @endif> {{$category->title}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label for="title">Наименование</label>
<input type="text" id="title" name="title" class="form-control" value="{{$news->title}}">
</div>
<div class="form-group">
<label for="image">Изображение</label>
<img src="{{ \Storage::disk('public')->url($news->image) }}" style="width: 220px;">
<input type="file" id="image" name="image" class="form-control">
</div>
<div class="form-group">
<label for="text">Описание</label>
<textarea type="text" id="description" name="text" class="form-control">{{$news->text}}</textarea>
</div>
<br>
<button type="submit" class="btn btn-success"> Сохранить</button>
</form>
</div>
</div>

@endsection
@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description') )
            .then( editor => {
                console.log( editor );
                } )
            .catch( error => {
                console.error( error );
                } );
</script>
@endpush
