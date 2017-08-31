<?php

/* torrent-form.tpl.php */
class __TwigTemplate_7f30139f7881d8a302f43812bb646d803c31318df0213ad8e406d2319d0c96ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-form.tpl.php", 1);
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
        echo "Создание нового торрента";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"w3-content\">

<div class=\"w3-panel w3-green\">
  <h2 class=\"w3-center\">";
        // line 9
        echo twig_escape_filter($this->env, trans("Torrent Create", "Создать торрент"), "html", null, true);
        echo "</h2>
</div>


<form class=\"w3-card w3-content\" action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\">
  <select size=\"1\" name=\"type\" class=\"w3-input\">
    <option disabled selected>";
        // line 15
        echo twig_escape_filter($this->env, trans("Select type of video", "Выберите тип видео"), "html", null, true);
        echo "</option>
    <option value=\"Serial\">";
        // line 16
        echo twig_escape_filter($this->env, trans("Serial", "Сериал"), "html", null, true);
        echo "</option>
    <option value=\"Film\">";
        // line 17
        echo twig_escape_filter($this->env, trans("Film", "Фильм"), "html", null, true);
        echo "</option>
   </select>
  <select size=\"1\" name=\"genre\" class=\"w3-input\">
    <option disabled selected>";
        // line 20
        echo twig_escape_filter($this->env, trans("Select genre", "Выберите жанр"), "html", null, true);
        echo "</option>
    <option value=\"Комедия\">";
        // line 21
        echo twig_escape_filter($this->env, trans("Comedy", "Комедия"), "html", null, true);
        echo "</option>
    <option value=\"Ужас\">";
        // line 22
        echo twig_escape_filter($this->env, trans("Scare", "Ужас"), "html", null, true);
        echo "</option>
    <option value=\"Триллер\">";
        // line 23
        echo twig_escape_filter($this->env, trans("Thriller", "Триллер"), "html", null, true);
        echo "</option>
    <option value=\"Драма\">";
        // line 24
        echo twig_escape_filter($this->env, trans("Drama", "Драма"), "html", null, true);
        echo "</option>
    <option value=\"Боевик\">";
        // line 25
        echo twig_escape_filter($this->env, trans("Action", "Боевик"), "html", null, true);
        echo "</option>
    <option value=\"Мистика\">";
        // line 26
        echo twig_escape_filter($this->env, trans("Mistic", "Мистика"), "html", null, true);
        echo "</option>
   </select>
  <input class=\"w3-input\" type=\"text\" name=\"name\" placeholder=\"название на русском\">
  <input class=\"w3-input\" type=\"text\" name=\"name_en\" placeholder=\"name on english\">
  <label for=\"file\"><b class=\"w3-blue\">";
        // line 30
        echo twig_escape_filter($this->env, trans("Only \".torrent\" file format", "Только \".torrent\" формат"), "html", null, true);
        echo "</b></label>
  <input class=\"w3-input\" id=\"file\" type=\"file\" name=\"file\">
  <label for=\"img\"><b class=\"w3-blue\">";
        // line 32
        echo twig_escape_filter($this->env, trans("Only \".jpeg\" or \".png\" file format", "Только \".jpeg\" или \".png\" формат"), "html", null, true);
        echo "</b></label>
  <input class=\"w3-input\" id=\"img\" type=\"file\" name=\"image\">
  <input class=\"w3-btn w3-margin-top\" type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, trans("Create", "Создать"), "html", null, true);
        echo "\">
</form>
";
        // line 36
        if (($context["error"] ?? null)) {
            // line 37
            echo "  <div class=\"\">
    ";
            // line 38
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
  </div>
";
        }
        // line 41
        echo "
";
        // line 42
        if (($context["builder"] ?? null)) {
            // line 43
            echo "  <div class=\"\">
    ";
            // line 44
            echo twig_escape_filter($this->env, ($context["builder"] ?? null), "html", null, true);
            echo "
  </div>
";
        }
        // line 47
        echo "
</div>
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
        return array (  137 => 47,  131 => 44,  128 => 43,  126 => 42,  123 => 41,  117 => 38,  114 => 37,  112 => 36,  107 => 34,  102 => 32,  97 => 30,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  66 => 20,  60 => 17,  56 => 16,  52 => 15,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Создание нового торрента{% endblock %}

{%block content%}
<div class=\"w3-content\">

<div class=\"w3-panel w3-green\">
  <h2 class=\"w3-center\">{{translate('Torrent Create','Создать торрент')}}</h2>
</div>


<form class=\"w3-card w3-content\" action=\"?torrent/create\" method=\"post\" enctype=\"multipart/form-data\">
  <select size=\"1\" name=\"type\" class=\"w3-input\">
    <option disabled selected>{{translate('Select type of video','Выберите тип видео')}}</option>
    <option value=\"Serial\">{{translate('Serial','Сериал')}}</option>
    <option value=\"Film\">{{translate('Film','Фильм')}}</option>
   </select>
  <select size=\"1\" name=\"genre\" class=\"w3-input\">
    <option disabled selected>{{translate('Select genre','Выберите жанр')}}</option>
    <option value=\"Комедия\">{{translate('Comedy','Комедия')}}</option>
    <option value=\"Ужас\">{{translate('Scare','Ужас')}}</option>
    <option value=\"Триллер\">{{translate('Thriller','Триллер')}}</option>
    <option value=\"Драма\">{{translate('Drama','Драма')}}</option>
    <option value=\"Боевик\">{{translate('Action','Боевик')}}</option>
    <option value=\"Мистика\">{{translate('Mistic','Мистика')}}</option>
   </select>
  <input class=\"w3-input\" type=\"text\" name=\"name\" placeholder=\"название на русском\">
  <input class=\"w3-input\" type=\"text\" name=\"name_en\" placeholder=\"name on english\">
  <label for=\"file\"><b class=\"w3-blue\">{{translate('Only \".torrent\" file format','Только \".torrent\" формат')}}</b></label>
  <input class=\"w3-input\" id=\"file\" type=\"file\" name=\"file\">
  <label for=\"img\"><b class=\"w3-blue\">{{translate('Only \".jpeg\" or \".png\" file format','Только \".jpeg\" или \".png\" формат')}}</b></label>
  <input class=\"w3-input\" id=\"img\" type=\"file\" name=\"image\">
  <input class=\"w3-btn w3-margin-top\" type=\"submit\" value=\"{{translate('Create','Создать')}}\">
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

</div>
{%endblock%}
", "torrent-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/torrent-form.tpl.php");
    }
}
