<?php

/* signin-form.tpl.php */
class __TwigTemplate_9b157de4bad79c5762749e0be3778d06537cfe355bd39de5cd00e68495980b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl.php", "signin-form.tpl.php", 1);
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
        echo "<h2>Login</h2>
<form action=\"?user/login\" method=\"post\">
  <input type=\"text\" name=\"username\" placeholder=\"username\">
  <br>
  <input type=\"password\" name=\"password\" placeholder=\"password\">
  <br>
  ";
        // line 9
        if (($context["error"] ?? null)) {
            // line 10
            echo "    <div class=\"\">
      ";
            // line 11
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 14
        echo "  <br>
  ";
        // line 15
        if (($context["img"] ?? null)) {
            // line 16
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"\" style=\"width:200px;\">
      <br>
      <input type=\"text\" name=\"captcha\" value=\"\">
  ";
        }
        // line 20
        echo "  <br>
  ";
        // line 21
        if (($context["cpt_er"] ?? null)) {
            // line 22
            echo "    <div class=\"\">
      ";
            // line 23
            echo twig_escape_filter($this->env, ($context["cpt_er"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 26
        echo "  <br>
  <input type=\"submit\" value=\"Enter\">
</form>
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
        return array (  77 => 26,  71 => 23,  68 => 22,  66 => 21,  63 => 20,  55 => 16,  53 => 15,  50 => 14,  44 => 11,  41 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
<h2>Login</h2>
<form action=\"?user/login\" method=\"post\">
  <input type=\"text\" name=\"username\" placeholder=\"username\">
  <br>
  <input type=\"password\" name=\"password\" placeholder=\"password\">
  <br>
  {% if error %}
    <div class=\"\">
      {{error}}
    </div>
  {% endif %}
  <br>
  {% if img %}
      <img src=\"{{img}}\" alt=\"\" style=\"width:200px;\">
      <br>
      <input type=\"text\" name=\"captcha\" value=\"\">
  {% endif %}
  <br>
  {% if cpt_er %}
    <div class=\"\">
      {{cpt_er}}
    </div>
  {% endif %}
  <br>
  <input type=\"submit\" value=\"Enter\">
</form>
{%endblock content%}
", "signin-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/signin-form.tpl.php");
    }
}
