<?php

/* signin-form.tpl.php */
class __TwigTemplate_bc2d0668c8a98d2ca7c7781f4580c0c275c9593496cacd85a317f42880cbffbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Login</h2>
<form action=\"?user/login\" method=\"post\">
  <input type=\"text\" name=\"username\" placeholder=\"username\">
  <br>
  <input type=\"password\" name=\"password\" placeholder=\"password\">
  <br>
  ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "    <div class=\"\">
      ";
            // line 9
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "  <br>
  ";
        // line 13
        if (($context["img"] ?? null)) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"\">
      <br>
      <input type=\"text\" name=\"captcha\" value=\"\">
  ";
        }
        // line 18
        echo "  <br>
  ";
        // line 19
        if (($context["cpt_er"] ?? null)) {
            // line 20
            echo "    <div class=\"\">
      ";
            // line 21
            echo twig_escape_filter($this->env, ($context["cpt_er"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 24
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
        return array (  65 => 24,  59 => 21,  56 => 20,  54 => 19,  51 => 18,  43 => 14,  41 => 13,  38 => 12,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Login</h2>
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
      <img src=\"{{img}}\" alt=\"\">
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
", "signin-form.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\signin-form.tpl.php");
    }
}
