<?php

/* admin-torrent-form.tpl.php */
class __TwigTemplate_436f46b8b336cdaeb272f3eaf8bfc916634b45def951e9f8a2651993b5e2474d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-torrent-form.tpl.php", 1);
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
      <div class=\"panel-heading\">Torrent update form</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" action=\"?torrent/update/\" method=\"post\">

            <div class=\"form-group\">
              <label>Type</label>
              <input type=\"text\" name=\"type\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "type", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Genre</label>
              <input type=\"text\" name=\"genre\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "genre", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Name</label>
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "name", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>File</label>
              <input type=\"text\" name=\"file\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "file", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Image</label>
              <input type=\"text\" name=\"image\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "image", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Time</label>
              <input type=\"text\" name=\"time\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["torrent"] ?? null), "time", array()), "html", null, true);
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
        return "admin-torrent-form.tpl.php";
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
      <div class=\"panel-heading\">Torrent update form</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" action=\"?torrent/update/\" method=\"post\">

            <div class=\"form-group\">
              <label>Type</label>
              <input type=\"text\" name=\"type\" value=\"{{torrent.type}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Genre</label>
              <input type=\"text\" name=\"genre\" value=\"{{torrent.genre}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Name</label>
              <input type=\"text\" name=\"name\" value=\"{{torrent.name}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>File</label>
              <input type=\"text\" name=\"file\" value=\"{{torrent.file}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Image</label>
              <input type=\"text\" name=\"image\" value=\"{{torrent.image}}\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Time</label>
              <input type=\"text\" name=\"time\" value=\"{{torrent.time}}\" class=\"form-control\">
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
", "admin-torrent-form.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\admin-torrent-form.tpl.php");
    }
}
