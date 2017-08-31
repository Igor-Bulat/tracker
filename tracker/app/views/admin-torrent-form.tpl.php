{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Torrent update form</div>
      <div class="panel-body">
        <div class="col-md-6">
          <form role="form" action="?torrent/update/" method="post">

            <div class="form-group">
              <label>Type</label>
              <input type="text" name="type" value="{{torrent.type}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Genre</label>
              <input type="text" name="genre" value="{{torrent.genre}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" value="{{torrent.name}}" class="form-control">
            </div>

            <div class="form-group">
              <label>File</label>
              <input type="text" name="file" value="{{torrent.file}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Image</label>
              <input type="text" name="image" value="{{torrent.image}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Time</label>
              <input type="text" name="time" value="{{torrent.time}}" class="form-control">
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
