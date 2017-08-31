<?php

/* signup-form.tpl.php */
class __TwigTemplate_e26b496886264ce12feef0c479c313e1164ec09685fdc45de225699003f34ca0 extends Twig_Template
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
        echo "<h2>create an account</h2>
<form action=\"?user/create\" method=\"post\">
  <input type=\"text\" name=\"username\" placeholder=\"username\">
  <input type=\"password\" name=\"password\" placeholder=\"password\">
  <input type=\"email\" name=\"email\" placeholder=\"email\">
  ";
        // line 6
        if (($context["error"] ?? null)) {
            // line 7
            echo "    <div class=\"\">
      ";
            // line 8
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 11
        echo "  <input type=\"submit\" value=\"Create\">
</form>
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
        return array (  37 => 11,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>create an account</h2>
<form action=\"?user/create\" method=\"post\">
  <input type=\"text\" name=\"username\" placeholder=\"username\">
  <input type=\"password\" name=\"password\" placeholder=\"password\">
  <input type=\"email\" name=\"email\" placeholder=\"email\">
  {% if error %}
    <div class=\"\">
      {{error}}
    </div>
  {% endif %}
  <input type=\"submit\" value=\"Create\">
</form>
", "signup-form.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\signup-form.tpl.php");
    }
}
