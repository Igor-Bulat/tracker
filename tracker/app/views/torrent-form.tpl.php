{% extends "layout.tpl.php" %}

{% block title %}Create new torrent{% endblock %}

{%block content%}
<div class="w3-content">

<div class="w3-panel w3-green">
  <h2 class="w3-center">{{translate('Torrent Create','Создать торрент')}}</h2>
</div>


<form class="w3-card w3-content" action="?torrent/create" method="post" enctype="multipart/form-data">
  <select size="1" name="type" class="w3-input">
    <option disabled selected>{{translate('Select type of video','Выберите тип видео')}}</option>
    <option value="Serial">{{translate('Serial','Сериал')}}</option>
    <option value="Film">{{translate('Film','Фильм')}}</option>
   </select>
  <select size="1" name="genre" class="w3-input">
    <option disabled selected>{{translate('Select genre','Выберите жанр')}}</option>
    <option value="Комедия">{{translate('Comedy','Комедия')}}</option>
    <option value="Ужас">{{translate('Scare','Ужас')}}</option>
    <option value="Триллер">{{translate('Thriller','Триллер')}}</option>
    <option value="Драма">{{translate('Drama','Драма')}}</option>
    <option value="Боевик">{{translate('Action','Боевик')}}</option>
    <option value="Мистика">{{translate('Mistic','Мистика')}}</option>
   </select>
  <input class="w3-input" type="text" name="name" placeholder="название на русском">
  <input class="w3-input" type="text" name="name_en" placeholder="name on english">
  <label for="file"><b class="w3-blue">{{translate('Only ".torrent" file format','Только ".torrent" формат')}}</b></label>
  <input class="w3-input" id="file" type="file" name="file">
  <label for="img"><b class="w3-blue">{{translate('Only ".jpeg" or ".png" file format','Только ".jpeg" или ".png" формат')}}</b></label>
  <input class="w3-input" id="img" type="file" name="image">
  <input class="w3-btn w3-margin-top" type="submit" value="{{translate('Create','Создать')}}">
</form>
{% if error %}
  <div class="">
    {{error}}
  </div>
{% endif %}

{% if builder %}
  <div class="">
    {{builder}}
  </div>
{% endif %}

</div>
{%endblock%}
