<?php

/* torrent-detail.tpl.php */
class __TwigTemplate_e498a422c9c7cfe673580b5d7e484d38a05d9884465d4ccd590b67927c3df1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-detail.tpl.php", 1);
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
    <th></th>
    <th>Тип</th>
    <th>Название</th>
    <th>Жанр</th>
    <th>Фаил</th>
    <th>Изображение</th>
  </tr>
";
        // line 12
        if (($context["data"] ?? null)) {
            // line 13
            echo "    <tr>
      <th class=\"t-";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "html", null, true);
            echo "\" style=\"width:50px\"></th>
      <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "name", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "genre", array()), "html", null, true);
            echo "</th>
      <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "file", array()), "html", null, true);
            echo "</th>
      <th><img src=\"public/images/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "image", array()), "html", null, true);
            echo "\" alt=\"\"></th>
    </tr>
  ";
        }
        // line 22
        echo "  </table>



";
    }

    public function getTemplateName()
    {
        return "torrent-detail.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  44 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
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
    <th></th>
    <th>Тип</th>
    <th>Название</th>
    <th>Жанр</th>
    <th>Фаил</th>
    <th>Изображение</th>
  </tr>
{% if data %}
    <tr>
      <th class=\"t-{{data.type}}\" style=\"width:50px\"></th>
      <th>{{data.type}}</th>
      <th>{{data.name}}</th>
      <th>{{data.genre}}</th>
      <th>{{data.file}}</th>
      <th><img src=\"public/images/{{data.image}}\" alt=\"\"></th>
    </tr>
  {%endif%}
  </table>



{%endblock%}
", "torrent-detail.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\torrent-detail.tpl.php");
    }
}
