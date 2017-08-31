<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/datepicker3.css" rel="stylesheet">
<link href="public/css/styles.css" rel="stylesheet">
<link href="public/css/bootstrap-table.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
  <!-- шапка -->
  {% include 'admin-navbar.tpl.php' %}
  <!-- правое меню -->
  {% include 'admin-sidebar.tpl.php' %}
  <!-- конент -->
  {% block content %}
  {% endblock %}


  <script src="public/js/jquery-1.11.1.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/chart.min.js"></script>
	<script src="public/js/chart-data.js"></script>
	<script src="public/js/easypiechart.js"></script>
	<script src="public/js/easypiechart-data.js"></script>
	<script src="public/js/bootstrap-datepicker.js"></script>
  <script src="public/js/bootstrap-table.js"></script>
  <script src="https://use.fontawesome.com/126fa6f22d.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
