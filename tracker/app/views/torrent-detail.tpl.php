{% extends "layout.tpl.php" %}

{% block title %}Details about torrent{% endblock %}

{%block content%}
<div class="w3-card w3-padding-12">

<table class="w3-table w3-striped">
  {% if data %}
<tr class="w3-third w3-right">
 <th class="w3-right">
  <img src="public/images/{{data.image}}" style="width:100%;cursor:zoom-in" onclick="document.getElementById('modal01').style.display='block'">
    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom">
              <img src="public/images/{{data.image}}" style="width:100%">
          </div>
    </div>
 </th>
</tr>

  <tr class="w3-twothird w3-padding-tiny"><th class="w3-medium">{{translate('Name','Имя')}}</th><th class="w3-medium w3-wide">{{data.name}}</th></tr>
  <tr class="w3-twothird w3-padding-tiny"><th class="w3-medium">{{translate('Type','Тип')}}</th><th class="w3-medium w3-wide">{{data.type}}</th></tr>
  <tr class="w3-twothird w3-padding-tiny"><th class="w3-medium">{{translate('Genre','Жанр')}}</th><th class="w3-medium w3-wide">{{data.genre}}</th></tr>
  <tr class="w3-twothird w3-padding-tiny"><th class="w3-medium">{{translate('File','Фаил')}}</th><th class="w3-medium w3-wide">{{data.file}}</th></tr>
  <tr class="w3-twothird w3-padding-tiny"><th class="w3-medium">{{translate('Date','Дата')}}</th><th class="w3-medium w3-wide">{{data.time|date("F jS \\a\\t g:ia")}}</th></tr>
  {%endif%}

  </table>
</div>

<div class="w3-content w3-padding-32 w3-center">
<table class="w3-table w3-content w3-striped w3-bordered">
  <tr>
    <th class="w3-quarter w3-large">{{translate('User','Пользователь')}}</th>
    <th class="w3-half w3-large">{{translate('Comment','Комментарий')}}</th>
    <th class="w3-quarter w3-large">{{translate('Date','Дата')}}</th>
  </tr>
  {% if comments%}
  {% for comment in comments %}
  <tr>
    <th class="w3-quarter">{{comment.user_id}}</th>
    <th class="w3-half">{{comment.text}}</th>
    <th class="w3-quarter">{{comment.time|date("F jS \\a\\t g:ia")}}</th>
  </tr>
  {% endfor %}
  {% else %}
  <tr>
    <th class="w3-center">{{translate('No comments','Нет комментриев')}}</th>
  </tr>
  {% endif %}
</table>
</div>

{% if login == true %}
<div class="w3-content w3-padding-12">
 {% include 'comments.tpl.php' %}
 </div>
{% endif %}

{%endblock%}
