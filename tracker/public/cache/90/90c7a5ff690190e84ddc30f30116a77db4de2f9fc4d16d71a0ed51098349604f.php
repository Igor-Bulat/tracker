<?php

/* admin-comments-list.tpl.php */
class __TwigTemplate_1fda7e6ec29633b05e11787ec5e176901f060c68d93d94271502ae2b4d296274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-comments-list.tpl.php", 1);
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
      <h1 class=\"page-header\">Comments</h1>
    </div>
  </div><!--/.row-->


  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <table class=\"table\">
              <thead>
              <tr>
                  <th>User ID</th>
                  <th>TEXT</th>
                  <th>Torrent ID</th>
                  <th>ID</th>
                  <th>Time</th>
              </tr>
              </thead>
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 27
            echo "              <tr>
                  <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user_id", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "torrent_id", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th>
                  <th><a href=\"?comment/delete/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></th>
                  <th><a href=\"?comment/update/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></th>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

";
    }

    public function getTemplateName()
    {
        return "admin-comments-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  60 => 27,  56 => 26,  31 => 3,  28 => 2,  11 => 1,);
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
      <h1 class=\"page-header\">Comments</h1>
    </div>
  </div><!--/.row-->


  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <table class=\"table\">
              <thead>
              <tr>
                  <th>User ID</th>
                  <th>TEXT</th>
                  <th>Torrent ID</th>
                  <th>ID</th>
                  <th>Time</th>
              </tr>
              </thead>
              {% for comment in comments%}
              <tr>
                  <th>{{comment.user_id}}</th>
                  <th>{{comment.text}}</th>
                  <th>{{comment.torrent_id}}</th>
                  <th>{{comment.id}}</th>
                  <th>{{comment.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
                  <th><a href=\"?comment/delete/{{comment.id}}\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></th>
                  <th><a href=\"?comment/update/{{comment.id}}\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></th>
              </tr>
              {% endfor %}
          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

{% endblock content %}
", "admin-comments-list.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\admin-comments-list.tpl.php");
    }
}
