{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Users</h1>
    </div>
  </div><!--/.row-->


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table">
              <thead>
              <tr>
                  <th>Nickname</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>ID</th>
                  <th>Time</th>
                  <th>Role</th>
              </tr>
              </thead>
              {% for user in users%}
              <tr>
                  <th>{{user.nickname}}</th>
                  <th>{{user.password}}</th>
                  <th>{{user.email}}</th>
                  <th>{{user.id}}</th>
                  <th>{{user.time|date("F jS \\a\\t g:ia")}}</th>
                  <th>{{user.role}}</th>
                  <th><i data-toggle="modal" data-target="#myModal-{{user.id}}" class="btn fa fa-trash-o" aria-hidden="true"></i></th>
                  <th><a href="?user/update/{{user.nickname}}"><i class="fa fa-refresh" aria-hidden="true"></i></a></th>
              </tr>
              {% endfor %}
          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

<!-- Modal -->
{% for user in users%}
<div class="modal fade" id="myModal-{{user.id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Remove user</h4>
      </div>
      <div class="modal-body">
        точно брат?
      </div>
      <div class="modal-footer">
        <a href="?user/delete/{{user.id}}"><button type="button" name="button">Remove</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
  {% endfor %}

{% endblock content %}
