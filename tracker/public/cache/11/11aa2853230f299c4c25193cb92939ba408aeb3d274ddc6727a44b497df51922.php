<?php

/* torrent-list.tpl.php */
class __TwigTemplate_fe019205581f63955ac303a3d198841936d38c2a3f99452111466b4fbb4174ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "torrent-list.tpl.php", 1);
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
        echo "<table class=\"w3-table w3-striped w3-bordered w3-third\">
  <tr>
    <th></th>
    <th>Название</th>
  </tr>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tor"]) {
            // line 9
            echo "    <tr>

      ";
            // line 11
            if ($this->getAttribute($context["tor"], "type", array())) {
                // line 12
                echo "      <th class=\"t-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tor"], "type", array()), "html", null, true);
                echo "\" style=\"width:50px\"></th>
      ";
            }
            // line 14
            echo "
      <th><a href=\"?torrent/detail/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["tor"], "file", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tor"], "name", array()), "html", null, true);
            echo "</a></th>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return array (  68 => 18,  57 => 15,  54 => 14,  48 => 12,  46 => 11,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
<table class=\"w3-table w3-striped w3-bordered w3-third\">
  <tr>
    <th></th>
    <th>Название</th>
  </tr>
{% for tor in torrent %}
    <tr>

      {% if tor.type %}
      <th class=\"t-{{tor.type}}\" style=\"width:50px\"></th>
      {% endif %}

      <th><a href=\"?torrent/detail/{{tor.file}}\">{{tor.name}}</a></th>
    </tr>
  {%endfor%}
  </table>



{%endblock%}
", "torrent-list.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/torrent-list.tpl.php");
    }
}
