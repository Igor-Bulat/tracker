<?php

/* admin-login.tpl.php */
class __TwigTemplate_8d139d77500a9b18d760ef56852650118b44008927c73bba35f851fd32a28069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-login.tpl.php", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin-layout.tpl.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Страница входа в админку";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
    <div class=\"login-panel panel panel-default\">
      <div class=\"panel-heading\">Log in</div>
      <div class=\"panel-body\">
        <form role=\"form\" action=\"?admin/login\" method=\"post\">
          <fieldset>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Nickname\" name=\"nickname\" type=\"text\" autofocus=\"\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
            </div>
            <div class=\"checkbox\">
              <label>
                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
              </label>
            </div>
            <!-- <a href=\"index.html\" class=\"btn btn-primary\">Login</a> -->
            <input type=\"submit\" class=\"btn btn-primary\" name=\"name\" value=\"Login\">
          </fieldset>
        </form>
        ";
        // line 28
        if (($context["error"] ?? null)) {
            // line 29
            echo "         <div class=\"\">
           <h3>";
            // line 30
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo " !!!!!!!!</h3>
         </div>
         ";
        }
        // line 33
        echo "      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->

";
    }

    public function getTemplateName()
    {
        return "admin-login.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 33,  67 => 30,  64 => 29,  62 => 28,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"admin-layout.tpl.php\" %}

{% block title %}Страница входа в админку{% endblock %}

{%block content%}
<div class=\"row\">
  <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
    <div class=\"login-panel panel panel-default\">
      <div class=\"panel-heading\">Log in</div>
      <div class=\"panel-body\">
        <form role=\"form\" action=\"?admin/login\" method=\"post\">
          <fieldset>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Nickname\" name=\"nickname\" type=\"text\" autofocus=\"\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
            </div>
            <div class=\"checkbox\">
              <label>
                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
              </label>
            </div>
            <!-- <a href=\"index.html\" class=\"btn btn-primary\">Login</a> -->
            <input type=\"submit\" class=\"btn btn-primary\" name=\"name\" value=\"Login\">
          </fieldset>
        </form>
        {% if error %}
         <div class=\"\">
           <h3>{{ error }} !!!!!!!!</h3>
         </div>
         {% endif %}
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->

{%endblock content%}
", "admin-login.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-login.tpl.php");
    }
}
