{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Comments</h1>
    </div>
  </div><!--/.row-->


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table">
              <thead>
              <tr>
                  <th>User ID</th>
                  <th>TEXT</th>
                  <th>Torrent ID</th>
                  <th>ID</th>
                  <th>Time</th>
              </tr>
              </thead>
              {% for comment in comments%}
              <tr>
                  <th>{{comment.user_id}}</th>
                  <th>{{comment.text}}</th>
                  <th>{{comment.torrent_id}}</th>
                  <th>{{comment.id}}</th>
                  <th>{{comment.time|date("F jS \\a\\t g:ia")}}</th>
                  <th><a href="?comment/delete/{{comment.id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></th>
                  <th><a href="?comment/update/{{comment.id}}"><i class="fa fa-refresh" aria-hidden="true"></i></a></th>
              </tr>
              {% endfor %}
          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

{% endblock content %}
