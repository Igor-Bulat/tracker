<?php

/* user-detail.tpl.php */
class __TwigTemplate_99768749169a707619ba13ebce9c7edcd83296ddcfc0f9c35cbe362f1d71bf20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "user-detail.tpl.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th>Имя</th>
    <th>Почта</th>
    <th>ID</th>
  </tr>
";
        // line 9
        if (($context["data"] ?? null)) {
            // line 10
            echo "    <tr>
      <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "nickname", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
            echo "</th>
    </tr>
  ";
        }
        // line 16
        echo "  </table>



";
    }

    public function getTemplateName()
    {
        return "user-detail.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  52 => 13,  48 => 12,  44 => 11,  41 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.tpl.php\" %}
{%block content%}
<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th>Имя</th>
    <th>Почта</th>
    <th>ID</th>
  </tr>
{% if data %}
    <tr>
      <th>{{data.nickname}}</th>
      <th>{{data.email}}</th>
      <th>{{data.id}}</th>
    </tr>
  {%endif%}
  </table>



{%endblock%}
", "user-detail.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\user-detail.tpl.php");
    }
}
