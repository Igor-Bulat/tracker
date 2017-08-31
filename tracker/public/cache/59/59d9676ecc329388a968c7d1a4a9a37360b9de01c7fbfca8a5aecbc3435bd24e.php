<?php

/* layout.tpl.php */
class __TwigTemplate_979ce011428ba9244c43e3d96a7f7f6044d0296e8b19ffb19ed4cc16c9dc8c86 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
    <link rel=\"stylesheet\" href=\"public/css/style.css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
    <title></title>
  </head>
  <body>
    <div class=\"w3-container\">
      ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
  </body>
</html>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  34 => 12,  32 => 11,  20 => 1,);
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
    <link rel=\"stylesheet\" href=\"public/css/style.css\" media=\"screen\" title=\"no title\" charset=\"utf-8\">
    <title></title>
  </head>
  <body>
    <div class=\"w3-container\">
      {% block content %}{% endblock %}
    </div>
  </body>
</html>
", "layout.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\layout.tpl.php");
    }
}
