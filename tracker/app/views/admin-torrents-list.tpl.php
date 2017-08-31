{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Torrents</h1>
    </div>
  </div><!--/.row-->


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <table class="table">
              <thead>
              <tr>
                  <th>Type</th>
                  <th>Genre</th>
                  <th>Name</th>
                  <th>File</th>
                  <th>Image</th>
                  <th>Time</th>
              </tr>
              </thead>
              {% for torrent in torrents%}
              <tr>
                  <th>{{torrent.type}}</th>
                  <th>{{torrent.genre}}</th>
                  <th>{{torrent.name}}</th>
                  <th>{{torrent.file}}</th>
                  <th>{{torrent.image}}</th>
                  <th>{{torrent.time|date("F jS \\a\\t g:ia")}}</th>
                  <th><a href="?torrent/delete/{{torrent.file}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></th>
                  <th><a href="?torrent/update/{{torrent.file}}"><i class="fa fa-refresh" aria-hidden="true"></i></a></th>
              </tr>
              {% endfor %}
          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

{% endblock content %}
