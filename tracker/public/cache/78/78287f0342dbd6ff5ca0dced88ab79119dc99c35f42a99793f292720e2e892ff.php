<?php

/* navbar.tpl.php */
class __TwigTemplate_feace7bc8f53e95cb078cd0b49ddf5acba98b1d18c2debfd8a96b1ad14cd7fb5 extends Twig_Template
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
        echo "<ul class=\"w3-navbar w3-black\">
  <li><a href=\"#\">Main Page</a></li>
  <li><a href=\"#\">Torrents</a></li>

  <li class=\"w3-right\">
    ";
        // line 6
        if ((($context["login"] ?? null) == true)) {
            // line 7
            echo "    <a href=\"?user/login\">Login</a>
    ";
        } else {
            // line 9
            echo "    <a href=\"?user/logout\">Logout</a>
    ";
        }
        // line 11
        echo "  </li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "navbar.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  32 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"w3-navbar w3-black\">
  <li><a href=\"#\">Main Page</a></li>
  <li><a href=\"#\">Torrents</a></li>

  <li class=\"w3-right\">
    {% if login == true %}
    <a href=\"?user/login\">Login</a>
    {% else %}
    <a href=\"?user/logout\">Logout</a>
    {% endif %}
  </li>

</ul>
", "navbar.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/navbar.tpl.php");
    }
}
