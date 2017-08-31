<?php

/* user-list.tpl.php */
class __TwigTemplate_96f3b4e1446322cb26d31d4cf4af76b9a2264cb792ed14df086493003022b6f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "user-list.tpl.php", 1);
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
        echo "Все пользователи";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th class=\"w3-center\">
      <img src=\"http://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/96/User-Group-icon.png\" alt=\"\" style=\"width:100px\">
    </th>
  </tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "    <tr>
      <th class=\"w3-margin-left\"><a href=\"?user/detail/";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "</a></th>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </table>



";
    }

    public function getTemplateName()
    {
        return "user-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  53 => 14,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Все пользователи{% endblock %}

{%block content%}
<table class=\"w3-table w3-striped w3-bordered w3-content\">
  <tr>
    <th class=\"w3-center\">
      <img src=\"http://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/96/User-Group-icon.png\" alt=\"\" style=\"width:100px\">
    </th>
  </tr>
{% for user in users %}
    <tr>
      <th class=\"w3-margin-left\"><a href=\"?user/detail/{{user.id}}\">{{user.nickname}}</a></th>
    </tr>
  {%endfor%}
  </table>



{%endblock%}
", "user-list.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/user-list.tpl.php");
    }
}
