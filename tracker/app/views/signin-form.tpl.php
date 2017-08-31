{% extends "layout.tpl.php" %}

{% block title %}Sign-in page{% endblock %}

{%block content%}
<div class="w3-card-4 w3-content w3-margin-top">


  <div class="w3-center w3-green">
      <h2 class="uppercase">{{translate('Login','Логин')}}</h2>
    </div>
<form action="?user/login" method="post" class="w3-container">
  <input class="w3-input w3-border" type="text" name="username" placeholder="username">
  <br>
  <input class="w3-input w3-border" type="password" name="password" placeholder="password">
  <br>
  {% if error %}
    <div class="w3-medium w3-text-red">
      {{error}}
    </div>
  {% endif %}
  <br>
  {% if img %}
      <img src="{{img}}" alt="" style="width:200px;">
      <br>
      <input class="w3-input" type="text" name="captcha" value="" placeholder="enter words from image">
  {% endif %}
  <br>
  {% if cpt_er %}
    <div class="w3-medium w3-text-red">
      {{cpt_er}}
    </div>
  {% endif %}
  <br>
  <input class="w3-btn w3-yellow" type="submit" value="{{translate('Login','Войти')}}">
</form>

</div>

{%endblock content%}
