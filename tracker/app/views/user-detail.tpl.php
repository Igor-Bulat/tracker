{% extends "layout.tpl.php" %}

{% block title %}More about user{% endblock %}

{%block content%}
<table class="w3-table w3-striped w3-bordered w3-content">
  <tr>
    <th>Имя</th>
    <th>Почта</th>
    <th>ID</th>
    <th>Дата регистрации</th>
  </tr>
{% if data %}
    <tr>
      <th>{{data.nickname}}</th>
      <th>{{data.email}}</th>
      <th>{{data.id}}</th>
      <th>{{data.time|date("F jS \\a\\t g:ia")}}</th>
    </tr>
  {%endif%}
  </table>



{%endblock%}
