<?php

/* admin-torrents-list.tpl.php */
class __TwigTemplate_e8525245a88821353cd4e2eb114322e1f4793223b5eefac29954b827f443b9d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-torrents-list.tpl.php", 1);
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
      <h1 class=\"page-header\">Torrents</h1>
    </div>
  </div><!--/.row-->


  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <table class=\"table\">
              <thead>
              <tr>
                  <th>Type</th>
                  <th>Genre</th>
                  <th>Name</th>
                  <th>File</th>
                  <th>Image</th>
                  <th>Time</th>
              </tr>
              </thead>
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["torrents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["torrent"]) {
            // line 28
            echo "              <tr>
                  <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "type", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "genre", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "name", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "file", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "image", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["torrent"], "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th>
                  <th><a href=\"?torrent/delete/";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "file", array()), "html", null, true);
            echo "\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></th>
                  <th><a href=\"?torrent/update/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["torrent"], "file", array()), "html", null, true);
            echo "\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></th>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torrent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return "admin-torrents-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  68 => 30,  64 => 29,  61 => 28,  57 => 27,  31 => 3,  28 => 2,  11 => 1,);
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
      <h1 class=\"page-header\">Torrents</h1>
    </div>
  </div><!--/.row-->


  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <table class=\"table\">
              <thead>
              <tr>
                  <th>Type</th>
                  <th>Genre</th>
                  <th>Name</th>
                  <th>File</th>
                  <th>Image</th>
                  <th>Time</th>
              </tr>
              </thead>
              {% for torrent in torrents%}
              <tr>
                  <th>{{torrent.type}}</th>
                  <th>{{torrent.genre}}</th>
                  <th>{{torrent.name}}</th>
                  <th>{{torrent.file}}</th>
                  <th>{{torrent.image}}</th>
                  <th>{{torrent.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
                  <th><a href=\"?torrent/delete/{{torrent.file}}\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></th>
                  <th><a href=\"?torrent/update/{{torrent.file}}\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></th>
              </tr>
              {% endfor %}
          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

{% endblock content %}
", "admin-torrents-list.tpl.php", "C:\\xampp\\htdocs\\tracker\\app\\views\\admin-torrents-list.tpl.php");
    }
}
