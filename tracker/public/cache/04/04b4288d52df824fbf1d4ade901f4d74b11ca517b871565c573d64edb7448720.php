<?php

/* admin-sidebar.tpl.php */
class __TwigTemplate_6b0616167bce166d4fd47db72de4828cd7402393382f946bbfff247ed869f0fa extends Twig_Template
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
        echo "<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
  <ul class=\"nav menu\">
    <li class=\"active\"><a href=\"?admin\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
    <li><a href=\"?admin/users\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Users</a></li>
    <li><a href=\"?admin/torrents\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Torrents</a></li>
    <li><a href=\"?admin/comments\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Comments</a></li>
    <li><a href=\"?add\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg>New add block</a></li>
    <li role=\"presentation\" class=\"divider\"></li>
  </ul>
</div><!--/.sidebar-->
";
    }

    public function getTemplateName()
    {
        return "admin-sidebar.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
  <ul class=\"nav menu\">
    <li class=\"active\"><a href=\"?admin\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
    <li><a href=\"?admin/users\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Users</a></li>
    <li><a href=\"?admin/torrents\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Torrents</a></li>
    <li><a href=\"?admin/comments\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Comments</a></li>
    <li><a href=\"?add\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg>New add block</a></li>
    <li role=\"presentation\" class=\"divider\"></li>
  </ul>
</div><!--/.sidebar-->
", "admin-sidebar.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-sidebar.tpl.php");
    }
}
