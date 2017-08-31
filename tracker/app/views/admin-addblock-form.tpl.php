{% extends "admin-layout.tpl.php" %}

{%block content%}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">Form Elements</div>
      <div class="panel-body">
        <div class="col-md-6">
          <form role="form" method="post" action="?add">

            <div class="form-group">
              <label>Type</label>
              <input type="text" class="form-control" name="type" placeholder="Type">
            </div>

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
              <label>Price</label>
              <input type="text" name="price" class="form-control">
            </div>

            <div class="form-group">
              <label>Width</label>
              <input type="text" name="width" class="form-control">
            </div>

            <div class="form-group">
              <label>Height</label>
              <input type="text" name="height" class="form-control">
            </div>

            <div class="form-group">
              <label>Wrapper</label>
              <input type="text" name="wrapper" class="form-control">
            </div>





            <button type="submit" class="btn btn-primary">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->
</div>
{%endblock%}
