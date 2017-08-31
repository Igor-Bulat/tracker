{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Comment update form</div>
      <div class="panel-body">
        <div class="col-md-6">
          <form role="form" action="?comment/update/" method="post">

            <div class="form-group">
              <label>User ID</label>
              <input type="text" name="user_id" value="{{comment.user_id}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Text</label>
              <textarea name="text"  rows="8" cols="80">{{comment.text}}</textarea>
            </div>

            <div class="form-group">
              <label>Torrent ID</label>
              <input type="text" name="torrent_id" value="{{comment.torrent_id}}" class="form-control">
            </div>

            <div class="form-group">
              <label>ID</label>
              <input type="text" name="id" value="{{comment.id}}" class="form-control">
            </div>

            <div class="form-group">
              <label>Time</label>
              <input type="text" name="time" value="{{comment.time}}" class="form-control">
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
