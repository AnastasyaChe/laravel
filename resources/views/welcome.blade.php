@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
      
    @foreach($news as $newsItem) 
     @php 
      $url = route('news.show', ['id' => $newsItem->id]);
     @endphp
     
        <div class="post-preview">
            <a href = '{{$url}}'> <h2 class="post-title"> {{$newsItem->title}} </h2>
            <h3 class="post-subtitle"> {{$newsItem->text}}</h3>
            </a>   
            <p class="post-meta">Опубликовал админ
            {{$newsItem->created_at ?? now()}}&middot;<i>Категория:{{$newsItem->category->title}}</i></p>
        </div>
    @endforeach
    
       
        <hr>
              
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
@endsection