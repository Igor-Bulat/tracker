<?php

/* admin-user-form.tpl.php */
class __TwigTemplate_663f37f14cdce08d10e8b9d4aebe15854e66192ae2b94ac9bb51cd2f1b68fe8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-user-form.tpl.php", 1);
        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">User update form</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" action=\"?user/update/\" method=\"post\">

            <div class=\"form-group\">
              <label>Nickname</label>
              <input type=\"text\" name=\"nickname\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nickname", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Password</label>
              <input type=\"password\" name=\"password\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "password", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Email</label>
              <input type=\"email\" name=\"email\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>ID</label>
              <input type=\"text\" name=\"id\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Time</label>
              <input type=\"text\" name=\"time\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "time", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Role</label>
              <input type=\"text\" name=\"role\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "role", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->
  </div>
";
    }

    public function getTemplateName()
    {
        return "admin-user-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  76 => 34,  68 => 29,  60 => 24,  52 => 19,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-layout.tpl.php' %}
{% block content %}
<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">User update form</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" action=\"?user/update/\" method=\"post\">

            <div class=\"form-group\">
              <label>Nickname</label>
              <input type=\"text\" name=\"nickname\" value=\"{{user.nickname}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Password</label>
              <input type=\"password\" name=\"password\" value=\"{{user.password}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Email</label>
              <input type=\"email\" name=\"email\" value=\"{{user.email}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>ID</label>
              <input type=\"text\" name=\"id\" value=\"{{user.id}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Time</label>
              <input type=\"text\" name=\"time\" value=\"{{user.time}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Role</label>
              <input type=\"text\" name=\"role\" value=\"{{user.role}}\" class=\"form-control\">
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->
  </div>
{% endblock content %}
", "admin-user-form.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\admin-user-form.tpl.php");
    }
}
