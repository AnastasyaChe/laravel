<?php
echo "<h2>Перечень названий всех статей</h2>";
 foreach($newsList as $id=>$news) {
     $url = route('news.show', ['id' => $id]);
     echo "<div><a href = '{$url}'> {$news['title']}</a></div>" ;
}
