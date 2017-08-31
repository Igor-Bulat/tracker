<?php

/* torrent-detail.tpl.php */
class __TwigTemplate_569230a0a1f9c371a50719bf5e39cce95879048c3b12b6592f1f8edc8515329e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-detail.tpl.php", 1);
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
        echo "Details about torrent";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"w3-card w3-padding-12\">

<table class=\"w3-table w3-striped\">
  ";
        // line 9
        if (($context["data"] ?? null)) {
            // line 10
            echo "<tr class=\"w3-third w3-right\">
 <th class=\"w3-right\">
  <img src=\"public/images/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "image", array()), "html", null, true);
            echo "\" style=\"width:100%;cursor:zoom-in\" onclick=\"document.getElementById('modal01').style.display='block'\">
    <div id=\"modal01\" class=\"w3-modal\" onclick=\"this.style.display='none'\">
        <span class=\"w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright\">&times;</span>
          <div class=\"w3-modal-content w3-animate-zoom\">
              <img src=\"public/images/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "image", array()), "html", null, true);
            echo "\" style=\"width:100%\">
          </div>
    </div>
 </th>
</tr>

  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">";
            // line 22
            echo twig_escape_filter($this->env, trans("Name", "Имя"), "html", null, true);
            echo "</th><th class=\"w3-medium w3-wide\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "name", array()), "html", null, true);
            echo "</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">";
            // line 23
            echo twig_escape_filter($this->env, trans("Type", "Тип"), "html", null, true);
            echo "</th><th class=\"w3-medium w3-wide\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "type", array()), "html", null, true);
            echo "</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">";
            // line 24
            echo twig_escape_filter($this->env, trans("Genre", "Жанр"), "html", null, true);
            echo "</th><th class=\"w3-medium w3-wide\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "genre", array()), "html", null, true);
            echo "</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">";
            // line 25
            echo twig_escape_filter($this->env, trans("File", "Фаил"), "html", null, true);
            echo "</th><th class=\"w3-medium w3-wide\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "file", array()), "html", null, true);
            echo "</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">";
            // line 26
            echo twig_escape_filter($this->env, trans("Date", "Дата"), "html", null, true);
            echo "</th><th class=\"w3-medium w3-wide\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? null), "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th></tr>
  ";
        }
        // line 28
        echo "
  </table>
</div>

<div class=\"w3-content w3-padding-32 w3-center\">
<table class=\"w3-table w3-content w3-striped w3-bordered\">
  <tr>
    <th class=\"w3-quarter w3-large\">";
        // line 35
        echo twig_escape_filter($this->env, trans("User", "Пользователь"), "html", null, true);
        echo "</th>
    <th class=\"w3-half w3-large\">";
        // line 36
        echo twig_escape_filter($this->env, trans("Comment", "Комментарий"), "html", null, true);
        echo "</th>
    <th class=\"w3-quarter w3-large\">";
        // line 37
        echo twig_escape_filter($this->env, trans("Date", "Дата"), "html", null, true);
        echo "</th>
  </tr>
  ";
        // line 39
        if (($context["comments"] ?? null)) {
            // line 40
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 41
                echo "  <tr>
    <th class=\"w3-quarter\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user_id", array()), "html", null, true);
                echo "</th>
    <th class=\"w3-half\">";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
                echo "</th>
    <th class=\"w3-quarter\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
                echo "</th>
  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "  ";
        } else {
            // line 48
            echo "  <tr>
    <th class=\"w3-center\">";
            // line 49
            echo twig_escape_filter($this->env, trans("No comments", "Нет комментриев"), "html", null, true);
            echo "</th>
  </tr>
  ";
        }
        // line 52
        echo "</table>
</div>

";
        // line 55
        if ((($context["login"] ?? null) == true)) {
            // line 56
            echo "<div class=\"w3-content w3-padding-12\">
 ";
            // line 57
            $this->loadTemplate("comments.tpl.php", "torrent-detail.tpl.php", 57)->display($context);
            // line 58
            echo " </div>
";
        }
        // line 60
        echo "
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
        return array (  173 => 60,  169 => 58,  167 => 57,  164 => 56,  162 => 55,  157 => 52,  151 => 49,  148 => 48,  145 => 47,  136 => 44,  132 => 43,  128 => 42,  125 => 41,  120 => 40,  118 => 39,  113 => 37,  109 => 36,  105 => 35,  96 => 28,  89 => 26,  83 => 25,  77 => 24,  71 => 23,  65 => 22,  56 => 16,  49 => 12,  45 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Details about torrent{% endblock %}

{%block content%}
<div class=\"w3-card w3-padding-12\">

<table class=\"w3-table w3-striped\">
  {% if data %}
<tr class=\"w3-third w3-right\">
 <th class=\"w3-right\">
  <img src=\"public/images/{{data.image}}\" style=\"width:100%;cursor:zoom-in\" onclick=\"document.getElementById('modal01').style.display='block'\">
    <div id=\"modal01\" class=\"w3-modal\" onclick=\"this.style.display='none'\">
        <span class=\"w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright\">&times;</span>
          <div class=\"w3-modal-content w3-animate-zoom\">
              <img src=\"public/images/{{data.image}}\" style=\"width:100%\">
          </div>
    </div>
 </th>
</tr>

  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">{{translate('Name','Имя')}}</th><th class=\"w3-medium w3-wide\">{{data.name}}</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">{{translate('Type','Тип')}}</th><th class=\"w3-medium w3-wide\">{{data.type}}</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">{{translate('Genre','Жанр')}}</th><th class=\"w3-medium w3-wide\">{{data.genre}}</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">{{translate('File','Фаил')}}</th><th class=\"w3-medium w3-wide\">{{data.file}}</th></tr>
  <tr class=\"w3-twothird w3-padding-tiny\"><th class=\"w3-medium\">{{translate('Date','Дата')}}</th><th class=\"w3-medium w3-wide\">{{data.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th></tr>
  {%endif%}

  </table>
</div>

<div class=\"w3-content w3-padding-32 w3-center\">
<table class=\"w3-table w3-content w3-striped w3-bordered\">
  <tr>
    <th class=\"w3-quarter w3-large\">{{translate('User','Пользователь')}}</th>
    <th class=\"w3-half w3-large\">{{translate('Comment','Комментарий')}}</th>
    <th class=\"w3-quarter w3-large\">{{translate('Date','Дата')}}</th>
  </tr>
  {% if comments%}
  {% for comment in comments %}
  <tr>
    <th class=\"w3-quarter\">{{comment.user_id}}</th>
    <th class=\"w3-half\">{{comment.text}}</th>
    <th class=\"w3-quarter\">{{comment.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
  </tr>
  {% endfor %}
  {% else %}
  <tr>
    <th class=\"w3-center\">{{translate('No comments','Нет комментриев')}}</th>
  </tr>
  {% endif %}
</table>
</div>

{% if login == true %}
<div class=\"w3-content w3-padding-12\">
 {% include 'comments.tpl.php' %}
 </div>
{% endif %}

{%endblock%}
", "torrent-detail.tpl.php", "C:\\OpenServer\\domains\\tracker\\app\\views\\torrent-detail.tpl.php");
    }
}
