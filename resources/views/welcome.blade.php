@extends('layouts.main')
@section('content')
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto">
      
    @foreach($newsList as $id=>$news) 
     @php 
     $url = route('news.show', ['id' => $id]);
     @endphp
     
        <div class="post-preview">
            <a href = '{{$url}}'> <h2 class="post-title"> {{$news['title']}}  </h2></a>   
            <p class="post-meta">Опубликовал админ
            {{now()}}&middot;</p>
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