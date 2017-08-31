{% extends "admin-layout.tpl.php" %}

{% block title %}Admin login page{% endblock %}

{%block content%}
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">Log in</div>
      <div class="panel-body">
        <form role="form" action="?admin/login" method="post">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="Nickname" name="nickname" type="text" autofocus="">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="Remember Me">Remember Me
              </label>
            </div>
            <!-- <a href="index.html" class="btn btn-primary">Login</a> -->
            <input type="submit" class="btn btn-primary" name="name" value="Login">
          </fieldset>
        </form>
        {% if error %}
         <div class="">
           <h3>{{ error }} !!!!!!!!</h3>
         </div>
         {% endif %}
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->

{%endblock content%}
