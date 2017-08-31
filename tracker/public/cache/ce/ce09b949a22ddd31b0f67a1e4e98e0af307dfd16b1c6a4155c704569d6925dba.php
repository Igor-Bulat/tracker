<?php

/* signin-form.tpl.php */
class __TwigTemplate_af9f63568ad14cfbda8c0b186253896e92fe948a59e9ad72d6864f89fbdb3c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "signin-form.tpl.php", 1);
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
        echo "Страница входа в аккаунт";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"w3-card-4 w3-content w3-margin-top\">


  <div class=\"w3-center w3-green\">
      <h2 class=\"uppercase\">";
        // line 10
        echo twig_escape_filter($this->env, trans("Login", "Логин"), "html", null, true);
        echo "</h2>
    </div>
<form action=\"?user/login\" method=\"post\" class=\"w3-container\">
  <input class=\"w3-input w3-border\" type=\"text\" name=\"username\" placeholder=\"username\">
  <br>
  <input class=\"w3-input w3-border\" type=\"password\" name=\"password\" placeholder=\"password\">
  <br>
  ";
        // line 17
        if (($context["error"] ?? null)) {
            // line 18
            echo "    <div class=\"w3-medium w3-text-red\">
      ";
            // line 19
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 22
        echo "  <br>
  ";
        // line 23
        if (($context["img"] ?? null)) {
            // line 24
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"\" style=\"width:200px;\">
      <br>
      <input class=\"w3-input\" type=\"text\" name=\"captcha\" value=\"\" placeholder=\"enter words from image\">
  ";
        }
        // line 28
        echo "  <br>
  ";
        // line 29
        if (($context["cpt_er"] ?? null)) {
            // line 30
            echo "    <div class=\"w3-medium w3-text-red\">
      ";
            // line 31
            echo twig_escape_filter($this->env, ($context["cpt_er"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 34
        echo "  <br>
  <input class=\"w3-btn w3-yellow\" type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, trans("Login", "Войти"), "html", null, true);
        echo "\">
</form>

</div>

";
    }

    public function getTemplateName()
    {
        return "signin-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  92 => 34,  86 => 31,  83 => 30,  81 => 29,  78 => 28,  70 => 24,  68 => 23,  65 => 22,  59 => 19,  56 => 18,  54 => 17,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Страница входа в аккаунт{% endblock %}

{%block content%}
<div class=\"w3-card-4 w3-content w3-margin-top\">


  <div class=\"w3-center w3-green\">
      <h2 class=\"uppercase\">{{translate('Login','Логин')}}</h2>
    </div>
<form action=\"?user/login\" method=\"post\" class=\"w3-container\">
  <input class=\"w3-input w3-border\" type=\"text\" name=\"username\" placeholder=\"username\">
  <br>
  <input class=\"w3-input w3-border\" type=\"password\" name=\"password\" placeholder=\"password\">
  <br>
  {% if error %}
    <div class=\"w3-medium w3-text-red\">
      {{error}}
    </div>
  {% endif %}
  <br>
  {% if img %}
      <img src=\"{{img}}\" alt=\"\" style=\"width:200px;\">
      <br>
      <input class=\"w3-input\" type=\"text\" name=\"captcha\" value=\"\" placeholder=\"enter words from image\">
  {% endif %}
  <br>
  {% if cpt_er %}
    <div class=\"w3-medium w3-text-red\">
      {{cpt_er}}
    </div>
  {% endif %}
  <br>
  <input class=\"w3-btn w3-yellow\" type=\"submit\" value=\"{{translate('Login','Войти')}}\">
</form>

</div>

{%endblock content%}
", "signin-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/signin-form.tpl.php");
    }
}
