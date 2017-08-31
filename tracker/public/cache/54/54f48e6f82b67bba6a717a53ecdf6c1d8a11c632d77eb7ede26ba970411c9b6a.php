<?php

/* homepage.tpl.php */
class __TwigTemplate_2396a5fbef4a566bae95c6c369e28860a41968dea333c660e72649a81c461884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "homepage.tpl.php", 1);
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
        echo "Торрент главная страница";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"add-block\" id=\"banner_top\"></div>

<div class=\"add-block\" id=\"banner_bot\"></div>
<!-- ///new torrents -->
<div class=\"w3-content\">
  <h3 class=\"w3-border-bottom w3-border-black w3-text-green w3-center uppercase\">";
        // line 12
        echo twig_escape_filter($this->env, trans("NEW TORRENTS", "НОВЫЕ ТОРРЕНТЫ", "TORRENTE NOI"), "html", null, true);
        echo "</h3>


<table class=\"w3-table w3-striped w3-bordered\">
  <tr>
    <th></th>
    <th class=\"w3-large uppercase\">";
        // line 18
        echo twig_escape_filter($this->env, trans("Torrent name", "Название торрента"), "html", null, true);
        echo "</th>
    <th class=\"w3-right w3-large w3-margin-right uppercase\">";
        // line 19
        echo twig_escape_filter($this->env, trans("Date", "Дата"), "html", null, true);
        echo "</th>
  </tr>
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
            // line 22
            echo "  <tr>
    <th class=\"t-";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "type", array()), "html", null, true);
            echo "\" style=\"width:50px\"></th>
    <th><a href=\"?torrent/detail/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "file", array()), "html", null, true);
            echo "\">
      <img src=\"http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-11/72/new-icon.png\" alt=\"\" style=\"width:20px\">
      ";
            // line 26
            echo twig_escape_filter($this->env, trans($this->getAttribute($context["torrent"], "name_en", array()), $this->getAttribute($context["torrent"], "name", array())), "html", null, true);
            echo "
    </a></th>
    <th class=\"w3-right w3-margin-right\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["torrent"], "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </table>

</div>
  <!-- ///new users -->
  <div class=\"w3-content\">
    <h3 class=\"w3-border-bottom w3-border-black w3-text-yellow w3-center uppercase\">";
        // line 36
        echo twig_escape_filter($this->env, trans("NEW USERS", "НОВЫЕ ПОЛЬЗОВАТЕЛИ", "UTILIZATORI NOI"), "html", null, true);
        echo "</h3>

  <table class=\"w3-table w3-striped w3-bordered\">
    <tr>
      <th></th>
      <th class=\"w3-large uppercase\">";
        // line 41
        echo twig_escape_filter($this->env, trans("Name", "Имя"), "html", null, true);
        echo "</th>
      <th class=\"w3-right w3-large w3-margin-right uppercase\">";
        // line 42
        echo twig_escape_filter($this->env, trans("Date", "Дата"), "html", null, true);
        echo "</th>
    </tr>
      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "      <tr>
        <th class=\"t-User\" style=\"width:50px\"></th>
        <th><a href=\"?user/detail/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "</a></th>
        <th class=\"w3-right w3-margin-right\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </table>

    </div>
";
    }

    public function getTemplateName()
    {
        return "homepage.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  132 => 48,  126 => 47,  122 => 45,  118 => 44,  113 => 42,  109 => 41,  101 => 36,  94 => 31,  85 => 28,  80 => 26,  75 => 24,  71 => 23,  68 => 22,  64 => 21,  59 => 19,  55 => 18,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Торрент главная страница{% endblock %}

{%block content%}

<div class=\"add-block\" id=\"banner_top\"></div>

<div class=\"add-block\" id=\"banner_bot\"></div>
<!-- ///new torrents -->
<div class=\"w3-content\">
  <h3 class=\"w3-border-bottom w3-border-black w3-text-green w3-center uppercase\">{{translate('NEW TORRENTS','НОВЫЕ ТОРРЕНТЫ','TORRENTE NOI')}}</h3>


<table class=\"w3-table w3-striped w3-bordered\">
  <tr>
    <th></th>
    <th class=\"w3-large uppercase\">{{translate('Torrent name','Название торрента')}}</th>
    <th class=\"w3-right w3-large w3-margin-right uppercase\">{{translate('Date','Дата')}}</th>
  </tr>
  {% for torrent in torrents %}
  <tr>
    <th class=\"t-{{torrent.type}}\" style=\"width:50px\"></th>
    <th><a href=\"?torrent/detail/{{torrent.file}}\">
      <img src=\"http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-11/72/new-icon.png\" alt=\"\" style=\"width:20px\">
      {{translate(torrent.name_en,torrent.name)}}
    </a></th>
    <th class=\"w3-right w3-margin-right\">{{torrent.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
  </tr>
  {% endfor %}
  </table>

</div>
  <!-- ///new users -->
  <div class=\"w3-content\">
    <h3 class=\"w3-border-bottom w3-border-black w3-text-yellow w3-center uppercase\">{{translate('NEW USERS','НОВЫЕ ПОЛЬЗОВАТЕЛИ','UTILIZATORI NOI')}}</h3>

  <table class=\"w3-table w3-striped w3-bordered\">
    <tr>
      <th></th>
      <th class=\"w3-large uppercase\">{{translate('Name','Имя')}}</th>
      <th class=\"w3-right w3-large w3-margin-right uppercase\">{{translate('Date','Дата')}}</th>
    </tr>
      {% for user in users %}
      <tr>
        <th class=\"t-User\" style=\"width:50px\"></th>
        <th><a href=\"?user/detail/{{user.id}}\">{{user.nickname}}</a></th>
        <th class=\"w3-right w3-margin-right\">{{user.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
      </tr>
      {% endfor %}
    </table>

    </div>
{%endblock content%}
", "homepage.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/homepage.tpl.php");
    }
}
