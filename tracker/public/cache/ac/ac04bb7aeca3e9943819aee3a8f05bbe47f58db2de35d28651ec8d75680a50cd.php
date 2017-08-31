<?php

/* user-detail.tpl.php */
class __TwigTemplate_212bdbb43abf3c81f0819b1c5f78853f25b6359a5b64806032f9707c1508a670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "user-detail.tpl.php", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "More about user";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th>Имя</th>
    <th>Почта</th>
    <th>ID</th>
    <th>Дата регистрации</th>
  </tr>
";
        // line 13
        if (($context["data"] ?? null)) {
            // line 14
            echo "    <tr>
      <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "nickname", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th>
    </tr>
  ";
        }
        // line 21
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
        return array (  70 => 21,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  49 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}More about user{% endblock %}

{%block content%}
<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th>Имя</th>
    <th>Почта</th>
    <th>ID</th>
    <th>Дата регистрации</th>
  </tr>
{% if data %}
    <tr>
      <th>{{data.nickname}}</th>
      <th>{{data.email}}</th>
      <th>{{data.id}}</th>
      <th>{{data.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
    </tr>
  {%endif%}
  </table>



{%endblock%}
", "user-detail.tpl.php", "C:\\OpenServer\\domains\\tracker\\app\\views\\user-detail.tpl.php");
    }
}
