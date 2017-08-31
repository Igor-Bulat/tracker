<form class="" action="?comment/create" method="post">
<textarea name="text" placeholder="trans('your comment here','Ваш комментарий')">
</textarea>
<input type="hidden" name="user_id" value="{{login}}">
<input type="hidden" name="torrent_id" value="{{tor_id}}">
<input type="submit" value="Добавить">
</form>
