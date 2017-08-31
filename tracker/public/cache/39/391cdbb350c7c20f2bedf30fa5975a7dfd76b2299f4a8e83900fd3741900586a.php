<?php

/* admin-comment-form.tpl.php */
class __TwigTemplate_179639b4b807165f54147c8244e74201bd217c50bb8ab33db18478c1b760da8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-comment-form.tpl.php", 1);
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
      <div class=\"panel-heading\">Comment update form</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" action=\"?comment/update/\" method=\"post\">

            <div class=\"form-group\">
              <label>User ID</label>
              <input type=\"text\" name=\"user_id\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? null), "user_id", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Text</label>
              <textarea name=\"text\"  rows=\"8\" cols=\"80\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? null), "text", array()), "html", null, true);
        echo "</textarea>
            </div>

            <div class=\"form-group\">
              <label>Torrent ID</label>
              <input type=\"text\" name=\"torrent_id\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? null), "torrent_id", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>ID</label>
              <input type=\"text\" name=\"id\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Time</label>
              <input type=\"text\" name=\"time\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? null), "time", array()), "html", null, true);
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
        return "admin-comment-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  68 => 29,  60 => 24,  52 => 19,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
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
      <div class=\"panel-heading\">Comment update form</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" action=\"?comment/update/\" method=\"post\">

            <div class=\"form-group\">
              <label>User ID</label>
              <input type=\"text\" name=\"user_id\" value=\"{{comment.user_id}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Text</label>
              <textarea name=\"text\"  rows=\"8\" cols=\"80\">{{comment.text}}</textarea>
            </div>

            <div class=\"form-group\">
              <label>Torrent ID</label>
              <input type=\"text\" name=\"torrent_id\" value=\"{{comment.torrent_id}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>ID</label>
              <input type=\"text\" name=\"id\" value=\"{{comment.id}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Time</label>
              <input type=\"text\" name=\"time\" value=\"{{comment.time}}\" class=\"form-control\">
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
", "admin-comment-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-comment-form.tpl.php");
    }
}
