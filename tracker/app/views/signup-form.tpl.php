{% extends "layout.tpl.php" %}

{% block title %}Registration{% endblock %}


{%block content%}
<div class="w3-content w3-card">

  <div class="w3-center w3-green">
      <h2 class="">{{translate('Create an account','Создать аккаунт')}}</h2>
    </div>
<form action="?user/create" method="post">
  <input class="w3-input w3-border w3-margin-bottom" type="text" name="username" placeholder="username">
  <input class="w3-input w3-border w3-margin-bottom" type="password" name="password" placeholder="password">
  <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" placeholder="email">
  <input type="hidden" name="role" value="user">
  {% if error %}
    <div class="">
      {{error}}
    </div>
  {% endif %}
  <input class="w3-btn w3-yellow" type="submit" value="{{translate('Create','Создать')}}">
</form>

</div>
{%endblock content%}
