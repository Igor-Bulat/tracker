{% extends "layout.tpl.php" %}

{% block title %}All users{% endblock %}

{%block content%}
<table class="w3-table w3-striped w3-bordered w3-content">
  <tr>
    <th class="w3-center">
      <img src="http://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/96/User-Group-icon.png" alt="" style="width:100px">
    </th>
  </tr>
{% for user in users %}
    <tr>
      <th class="w3-margin-left"><a href="?user/detail/{{user.id}}">{{user.nickname}}</a></th>
    </tr>
  {%endfor%}
  </table>



{%endblock%}
