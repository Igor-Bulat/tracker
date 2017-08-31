<?php

/* layout.tpl.php */
class __TwigTemplate_ac9d23170a84e9857944293317622449ee9eba263432c7a63199bce19cc0e444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
    <link rel=\"stylesheet\" href=\"?css/animate\">
    <link rel=\"stylesheet\" href=\"public/css/style.css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
    <script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
";
        // line 13
        $this->loadTemplate("navbar.tpl.php", "layout.tpl.php", 13)->display($context);
        // line 14
        echo "
<div class=\"w3-container w3-padding-32 animated shake\">
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</div>



  </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  56 => 10,  46 => 17,  44 => 16,  40 => 14,  38 => 13,  32 => 10,  21 => 1,);
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
    <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
    <link rel=\"stylesheet\" href=\"?css/animate\">
    <link rel=\"stylesheet\" href=\"public/css/style.css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
    <script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <title>{% block title %}{% endblock %}</title>
  </head>
  <body>
{%include \"navbar.tpl.php\"%}

<div class=\"w3-container w3-padding-32 animated shake\">
    {% block content %}{% endblock %}
</div>



  </body>
</html>
", "layout.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/layout.tpl.php");
    }
}
