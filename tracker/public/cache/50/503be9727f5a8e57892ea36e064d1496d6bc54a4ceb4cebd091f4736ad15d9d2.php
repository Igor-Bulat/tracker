<?php

/* admin-layout.tpl.php */
class __TwigTemplate_967ebd758f168c448826ee0950689cc4a13ceeddb1e694e02f8c34de499e454f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Forms</title>

<link href=\"public/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"public/css/datepicker3.css\" rel=\"stylesheet\">
<link href=\"public/css/styles.css\" rel=\"stylesheet\">
<link href=\"public/css/bootstrap-table.css\" rel=\"stylesheet\">


<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

</head>

<body>
  <!-- шапка -->
  ";
        // line 23
        $this->loadTemplate("admin-navbar.tpl.php", "admin-layout.tpl.php", 23)->display($context);
        // line 24
        echo "  <!-- правое меню -->
  ";
        // line 25
        $this->loadTemplate("admin-sidebar.tpl.php", "admin-layout.tpl.php", 25)->display($context);
        // line 26
        echo "  <!-- конент -->
  ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "

  <script src=\"public/js/jquery-1.11.1.min.js\"></script>
\t<script src=\"public/js/bootstrap.min.js\"></script>
\t<script src=\"public/js/chart.min.js\"></script>
\t<script src=\"public/js/chart-data.js\"></script>
\t<script src=\"public/js/easypiechart.js\"></script>
\t<script src=\"public/js/easypiechart-data.js\"></script>
\t<script src=\"public/js/bootstrap-datepicker.js\"></script>
  <script src=\"public/js/bootstrap-table.js\"></script>
  <script src=\"https://use.fontawesome.com/126fa6f22d.js\"></script>
\t<script>
\t\t!function (\$) {
\t\t\t\$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
\t\t\t\t\$(this).find('em:first').toggleClass(\"glyphicon-minus\");
\t\t\t});
\t\t\t\$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t\t}(window.jQuery);

\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t\t})
\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t\t})
\t</script>
</body>

</html>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "  ";
    }

    public function getTemplateName()
    {
        return "admin-layout.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  89 => 27,  56 => 29,  54 => 27,  51 => 26,  49 => 25,  46 => 24,  44 => 23,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Forms</title>

<link href=\"public/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"public/css/datepicker3.css\" rel=\"stylesheet\">
<link href=\"public/css/styles.css\" rel=\"stylesheet\">
<link href=\"public/css/bootstrap-table.css\" rel=\"stylesheet\">


<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
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


  <script src=\"public/js/jquery-1.11.1.min.js\"></script>
\t<script src=\"public/js/bootstrap.min.js\"></script>
\t<script src=\"public/js/chart.min.js\"></script>
\t<script src=\"public/js/chart-data.js\"></script>
\t<script src=\"public/js/easypiechart.js\"></script>
\t<script src=\"public/js/easypiechart-data.js\"></script>
\t<script src=\"public/js/bootstrap-datepicker.js\"></script>
  <script src=\"public/js/bootstrap-table.js\"></script>
  <script src=\"https://use.fontawesome.com/126fa6f22d.js\"></script>
\t<script>
\t\t!function (\$) {
\t\t\t\$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
\t\t\t\t\$(this).find('em:first').toggleClass(\"glyphicon-minus\");
\t\t\t});
\t\t\t\$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t\t}(window.jQuery);

\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t\t})
\t\t\$(window).on('resize', function () {
\t\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t\t})
\t</script>
</body>

</html>
", "admin-layout.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-layout.tpl.php");
    }
}
