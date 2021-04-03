 @foreach($newsList as $id=>$news) 
     @php 
     $url = route('news.show', ['id' => $id]);
     @endphp
     <div>
     <a href = '{{$url}}'> {{$news['title']}} </a>
     </div> ;

@endforeach