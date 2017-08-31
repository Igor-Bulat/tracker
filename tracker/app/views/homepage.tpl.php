{% extends "layout.tpl.php" %}

{% block title %}Torrent home page{% endblock %}

{%block content%}

<div class="add-block" id="banner_top"></div>

<div class="add-block" id="banner_bot"></div>
<!-- ///new torrents -->
<div class="w3-content">
  <h3 class="w3-border-bottom w3-border-black w3-text-green w3-center uppercase">{{translate('NEW TORRENTS','НОВЫЕ ТОРРЕНТЫ','TORRENTE NOI')}}</h3>


<table class="w3-table w3-striped w3-bordered">
  <tr>
    <th></th>
    <th class="w3-large uppercase">{{translate('Torrent name','Название торрента')}}</th>
    <th class="w3-right w3-large w3-margin-right uppercase">{{translate('Date','Дата')}}</th>
  </tr>
  {% for torrent in torrents %}
  <tr>
    <th class="t-{{torrent.type}}" style="width:50px"></th>
    <th><a href="?torrent/detail/{{torrent.file}}">
      <img src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-11/72/new-icon.png" alt="" style="width:20px">
      {{translate(torrent.name_en,torrent.name)}}
    </a></th>
    <th class="w3-right w3-margin-right">{{torrent.time|date("F jS \\a\\t g:ia")}}</th>
  </tr>
  {% endfor %}
  </table>

</div>
  <!-- ///new users -->
  <div class="w3-content">
    <h3 class="w3-border-bottom w3-border-black w3-text-yellow w3-center uppercase">{{translate('NEW USERS','НОВЫЕ ПОЛЬЗОВАТЕЛИ','UTILIZATORI NOI')}}</h3>

  <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th></th>
      <th class="w3-large uppercase">{{translate('Name','Имя')}}</th>
      <th class="w3-right w3-large w3-margin-right uppercase">{{translate('Date','Дата')}}</th>
    </tr>
      {% for user in users %}
      <tr>
        <th class="t-User" style="width:50px"></th>
        <th><a href="?user/detail/{{user.id}}">{{user.nickname}}</a></th>
        <th class="w3-right w3-margin-right">{{user.time|date("F jS \\a\\t g:ia")}}</th>
      </tr>
      {% endfor %}
    </table>

    </div>
{%endblock content%}
