<?php
foreach($news as $item) {
    $url = route('news.show', ['id' => $item['id']]);
    echo "<div><a href = '{$url}'> {$item['title']}</a></div>" ;
}
