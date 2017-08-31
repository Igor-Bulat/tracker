<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="?css/animate">
    <link rel="stylesheet" href="public/css/style.css" media="screen" title="no title" charset="utf-8">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <title>{% block title %}{% endblock %}</title>
  </head>
  <body>
{%include "navbar.tpl.php"%}

<div class="w3-container w3-padding-32 animated shake">
    {% block content %}{% endblock %}
</div>



  </body>
</html>
