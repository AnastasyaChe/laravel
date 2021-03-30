<?php
echo "<h2>Перечень всех имеющихся на сайте категорий новостей</h2>";
 foreach($categoryList as $id=>$category) {
     $url = route('category.show', ['id' => $id]);
     echo "<div><a href = '{$url}'> {$category}</a></div>" ;
}