@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
      
    @foreach($news as $newsItem) 
         
        <div class="post-preview">
            <a href = "#"> <h2 class="post-title"> {{$newsItem->title}} </h2>
            <h3 class="post-subtitle"> {{$newsItem->description}} </h3></a>   
            <p class="post-meta">Опубликовал админ
            {{$category->created_at ?? now()}}&middot;</p>
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