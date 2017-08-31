{% extends "layout.tpl.php" %}

{% block title %}Torrents list{% endblock %}

{%block content%}
<table class="w3-table w3-striped w3-bordered w3-content">
  <tr>
    <th></th>
    <th class="w3-large w3-center">
      <img src="http://icons.iconarchive.com/icons/aha-soft/torrent/96/utorrent-icon.png" alt="" style="width:100px">
    </th>
  </tr>
{% for tor in torrent %}
    <tr>
      {% if tor.type %}
      <th class="t-{{tor.type}}" style="width:50px"></th>
      {% endif %}
      <th><a href="?torrent/detail/{{tor.file}}">{{translate(tor.name_en,tor.name)}}</a></th>
    </tr>
  {%endfor%}
  </table>



{%endblock%}
