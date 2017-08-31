<?php

/* torrent-form.tpl.php */
class __TwigTemplate_58389d526d4df9ffff8ff4cd6d3408f7087d3043c608d20377611310fdbcc838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-form.tpl.php", 1);
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
        echo "<h2>create an torrent</h2>

<form class=\"w3-container w3-third\" action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\">
  <select size=\"1\" name=\"type\" class=\"w3-input\">
    <option disabled selected>Выберите тип видео</option>
    <option value=\"Serial\">Сериал</option>
    <option value=\"Film\">Фильм</option>
   </select>
  <select size=\"1\" name=\"genre\" class=\"w3-input\">
    <option disabled selected>Выберите жанр</option>
    <option value=\"Комедия\">Комедия</option>
    <option value=\"Ужас\">Ужас</option>
    <option value=\"Триллер\">Триллер</option>
    <option value=\"Драма\">Драма</option>
    <option value=\"Боевик\">Боевик</option>
    <option value=\"Мистика\">Мистика</option>
   </select>
  <input class=\"w3-input\" type=\"text\" name=\"name\" placeholder=\"name\">
  <input class=\"w3-input\" type=\"file\" name=\"file\">
  <input class=\"w3-input\" type=\"file\" name=\"image\">
  <input class=\"w3-btn\" type=\"submit\" value=\"Create\">
</form>
";
        // line 25
        if (($context["error"] ?? null)) {
            // line 26
            echo "  <div class=\"\">
    ";
            // line 27
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
  </div>
";
        }
        // line 30
        echo "
";
        // line 31
        if (($context["builder"] ?? null)) {
            // line 32
            echo "  <div class=\"\">
    ";
            // line 33
            echo twig_escape_filter($this->env, ($context["builder"] ?? null), "html", null, true);
            echo "
  </div>
";
        }
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "torrent-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  74 => 33,  71 => 32,  69 => 31,  66 => 30,  60 => 27,  57 => 26,  55 => 25,  31 => 3,  28 => 2,  11 => 1,);
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
<h2>create an torrent</h2>

<form class=\"w3-container w3-third\" action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\">
  <select size=\"1\" name=\"type\" class=\"w3-input\">
    <option disabled selected>Выберите тип видео</option>
    <option value=\"Serial\">Сериал</option>
    <option value=\"Film\">Фильм</option>
   </select>
  <select size=\"1\" name=\"genre\" class=\"w3-input\">
    <option disabled selected>Выберите жанр</option>
    <option value=\"Комедия\">Комедия</option>
    <option value=\"Ужас\">Ужас</option>
    <option value=\"Триллер\">Триллер</option>
    <option value=\"Драма\">Драма</option>
    <option value=\"Боевик\">Боевик</option>
    <option value=\"Мистика\">Мистика</option>
   </select>
  <input class=\"w3-input\" type=\"text\" name=\"name\" placeholder=\"name\">
  <input class=\"w3-input\" type=\"file\" name=\"file\">
  <input class=\"w3-input\" type=\"file\" name=\"image\">
  <input class=\"w3-btn\" type=\"submit\" value=\"Create\">
</form>
{% if error %}
  <div class=\"\">
    {{error}}
  </div>
{% endif %}

{% if builder %}
  <div class=\"\">
    {{builder}}
  </div>
{% endif %}

{%endblock%}
", "torrent-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/torrent-form.tpl.php");
    }
}
