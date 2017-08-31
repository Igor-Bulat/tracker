{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">User update form</div>
      <div class="panel-body">
        <div class="col-md-6">
          <form role="form" action="?user/update/" method="post">

            <div class="form-group">
              <label>Nickname</label>
              <input type="text" name="nickname" value="{{user.nickname}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" value="{{user.password}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="{{user.email}}" class="form-control">
            </div>

            <div class="form-group">
              <label>ID</label>
              <input type="text" name="id" value="{{user.id}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Time</label>
              <input type="text" name="time" value="{{user.time}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Role</label>
              <input type="text" name="role" value="{{user.role}}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->
  </div>
{% endblock content %}
