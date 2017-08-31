<?php

/* torrent-list.tpl.php */
class __TwigTemplate_4db302227719d31b585460e807c6cf01a7a7b7d546c4cd944e5fee3579b91a50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-list.tpl.php", 1);
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
        echo "Torrents list";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th></th>
    <th class=\"w3-large w3-center\">
      <img src=\"http://icons.iconarchive.com/icons/aha-soft/torrent/96/utorrent-icon.png\" alt=\"\" style=\"width:100px\">
    </th>
  </tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tor"]) {
            // line 14
            echo "    <tr>
      ";
            // line 15
            if ($this->getAttribute($context["tor"], "type", array())) {
                // line 16
                echo "      <th class=\"t-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tor"], "type", array()), "html", null, true);
                echo "\" style=\"width:50px\"></th>
      ";
            }
            // line 18
            echo "      <th><a href=\"?torrent/detail/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tor"], "file", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, trans($this->getAttribute($context["tor"], "name_en", array()), $this->getAttribute($context["tor"], "name", array())), "html", null, true);
            echo "</a></th>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </table>



";
    }

    public function getTemplateName()
    {
        return "torrent-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  62 => 18,  56 => 16,  54 => 15,  51 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Torrents list{% endblock %}

{%block content%}
<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th></th>
    <th class=\"w3-large w3-center\">
      <img src=\"http://icons.iconarchive.com/icons/aha-soft/torrent/96/utorrent-icon.png\" alt=\"\" style=\"width:100px\">
    </th>
  </tr>
{% for tor in torrent %}
    <tr>
      {% if tor.type %}
      <th class=\"t-{{tor.type}}\" style=\"width:50px\"></th>
      {% endif %}
      <th><a href=\"?torrent/detail/{{tor.file}}\">{{translate(tor.name_en,tor.name)}}</a></th>
    </tr>
  {%endfor%}
  </table>



{%endblock%}
", "torrent-list.tpl.php", "C:\\OpenServer\\domains\\tracker\\app\\views\\torrent-list.tpl.php");
    }
}
