<?php

/* signup-form.tpl.php */
class __TwigTemplate_ce1b405abdca41439b0ac57a7233c9e9acf704b952f8c728921a48945376b64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "signup-form.tpl.php", 1);
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
        echo "Регистрация";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"w3-content w3-card\">

  <div class=\"w3-center w3-green\">
      <h2 class=\"\">";
        // line 10
        echo twig_escape_filter($this->env, trans("Create an account", "Создать аккаунт"), "html", null, true);
        echo "</h2>
    </div>
<form action=\"?user/create\" method=\"post\">
  <input class=\"w3-input w3-border w3-margin-bottom\" type=\"text\" name=\"username\" placeholder=\"username\">
  <input class=\"w3-input w3-border w3-margin-bottom\" type=\"password\" name=\"password\" placeholder=\"password\">
  <input class=\"w3-input w3-border w3-margin-bottom\" type=\"email\" name=\"email\" placeholder=\"email\">
  <input type=\"hidden\" name=\"role\" value=\"user\">
  ";
        // line 17
        if (($context["error"] ?? null)) {
            // line 18
            echo "    <div class=\"\">
      ";
            // line 19
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 22
        echo "  <input class=\"w3-btn w3-yellow\" type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, trans("Create", "Создать"), "html", null, true);
        echo "\">
</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "signup-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  58 => 19,  55 => 18,  53 => 17,  43 => 10,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
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

{% block title %}Регистрация{% endblock %}


{%block content%}
<div class=\"w3-content w3-card\">

  <div class=\"w3-center w3-green\">
      <h2 class=\"\">{{translate('Create an account','Создать аккаунт')}}</h2>
    </div>
<form action=\"?user/create\" method=\"post\">
  <input class=\"w3-input w3-border w3-margin-bottom\" type=\"text\" name=\"username\" placeholder=\"username\">
  <input class=\"w3-input w3-border w3-margin-bottom\" type=\"password\" name=\"password\" placeholder=\"password\">
  <input class=\"w3-input w3-border w3-margin-bottom\" type=\"email\" name=\"email\" placeholder=\"email\">
  <input type=\"hidden\" name=\"role\" value=\"user\">
  {% if error %}
    <div class=\"\">
      {{error}}
    </div>
  {% endif %}
  <input class=\"w3-btn w3-yellow\" type=\"submit\" value=\"{{translate('Create','Создать')}}\">
</form>

</div>
{%endblock content%}
", "signup-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/signup-form.tpl.php");
    }
}
