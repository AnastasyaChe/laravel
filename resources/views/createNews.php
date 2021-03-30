<form name="feedback" method="POST" action="<?php ".route('admin.news.store')."?>"
  <label><b>Название статьи: </b><input type="text" size="100" name="news['title']"></label><br>
  <br>
  <label><b>Содержание: </b><textarea rows="25" cols="100"name="news['content']"></textarea></label><br>
  <select size="3">
    <option disabled>Категория новости:</option>
    <option value="internet">Internet</option>
    <option value="culture">Culture</option>
    <option value="politics">Politics</option>
    <option value="society">Society</option>
    <option value="religion">Religion</option>
    <option value="economy">Economy</option>
     </select>

  <input type="submit" name="send" value="Опубликовать">
</form>