<?php

/* admin-index.tpl.php */
class __TwigTemplate_c0edaa9e18a7c8bab585ddca52d78fabcfa069bf7bd41949bef40717be9f8252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-index.tpl.php", 1);
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
        echo "
\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Dashboard</h1>
\t\t\t</div>
\t\t</div><!--/.row-->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["users_count"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Пользователей</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["comments_count"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Комментариев</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["torrents_count"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Торрентов</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["views"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Посещение</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новые пользователи</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"";
        // line 72
        echo twig_escape_filter($this->env, ((($context["new_user"] ?? null) / ($context["users_count"] ?? null)) * 100), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, ($context["new_user"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новые комменты</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"";
        // line 81
        echo twig_escape_filter($this->env, ((($context["new_com"] ?? null) / ($context["comments_count"] ?? null)) * 100), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, ($context["new_com"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новые торренты</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"";
        // line 90
        echo twig_escape_filter($this->env, ((($context["new_tor"] ?? null) / ($context["torrents_count"] ?? null)) * 100), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, ($context["new_tor"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новых посещение</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"";
        // line 99
        echo twig_escape_filter($this->env, ((($context["new_views"] ?? null) / ($context["views"] ?? null)) * 100), "html", null, true);
        echo "\" ><span class=\"percent\">";
        echo twig_escape_filter($this->env, ($context["new_views"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

\t</div>\t<!--/.main-->
";
    }

    public function getTemplateName()
    {
        return "admin-index.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 99,  142 => 90,  128 => 81,  114 => 72,  98 => 59,  82 => 46,  66 => 33,  50 => 20,  31 => 3,  28 => 2,  11 => 1,);
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
{%block content%}

\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Dashboard</h1>
\t\t\t</div>
\t\t</div><!--/.row-->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{users_count}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Пользователей</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{comments_count}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Комментариев</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{torrents_count}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Торрентов</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">{{views}}</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Посещение</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новые пользователи</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"{{(new_user / users_count * 100)}}\" ><span class=\"percent\">{{new_user}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новые комменты</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"{{(new_com / comments_count * 100)}}\" ><span class=\"percent\">{{new_com}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новые торренты</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"{{(new_tor / torrents_count * 100)}}\" ><span class=\"percent\">{{new_tor}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Новых посещение</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"{{(new_views / views * 100)}}\" ><span class=\"percent\">{{new_views}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->

\t</div>\t<!--/.main-->
{%endblock content%}
", "admin-index.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-index.tpl.php");
    }
}
