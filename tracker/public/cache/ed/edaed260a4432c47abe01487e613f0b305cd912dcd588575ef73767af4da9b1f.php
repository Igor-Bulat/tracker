<?php

/* admin-users-list.tpl.php */
class __TwigTemplate_489dfdcb14ce995e19b12ef0e8ea6f3001b7a488c52d64b66f3fbf54e73c5ff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-users-list.tpl.php", 1);
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
      <h1 class=\"page-header\">Users</h1>
    </div>
  </div><!--/.row-->


  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <table class=\"table\">
              <thead>
              <tr>
                  <th>Nickname</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>ID</th>
                  <th>Time</th>
                  <th>Role</th>
              </tr>
              </thead>
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "              <tr>
                  <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</th>
                  <th>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "time", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</th>
                  <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role", array()), "html", null, true);
            echo "</th>
                  <th><i data-toggle=\"modal\" data-target=\"#myModal-";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn fa fa-trash-o\" aria-hidden=\"true\"></i></th>
                  <th><a href=\"?user/update/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></th>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

<!-- Modal -->
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 48
            echo "<div class=\"modal fade\" id=\"myModal-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Удалить пользователя</h4>
      </div>
      <div class=\"modal-body\">
        точно брат?
      </div>
      <div class=\"modal-footer\">
        <a href=\"?user/delete/";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><button type=\"button\" name=\"button\">Удалить</button></a>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Отмена</button>
      </div>
    </div>
  </div>
</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin-users-list.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  130 => 59,  115 => 48,  111 => 47,  101 => 39,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  68 => 30,  64 => 29,  61 => 28,  57 => 27,  31 => 3,  28 => 2,  11 => 1,);
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
      <h1 class=\"page-header\">Users</h1>
    </div>
  </div><!--/.row-->


  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <table class=\"table\">
              <thead>
              <tr>
                  <th>Nickname</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>ID</th>
                  <th>Time</th>
                  <th>Role</th>
              </tr>
              </thead>
              {% for user in users%}
              <tr>
                  <th>{{user.nickname}}</th>
                  <th>{{user.password}}</th>
                  <th>{{user.email}}</th>
                  <th>{{user.id}}</th>
                  <th>{{user.time|date(\"F jS \\\\a\\\\t g:ia\")}}</th>
                  <th>{{user.role}}</th>
                  <th><i data-toggle=\"modal\" data-target=\"#myModal-{{user.id}}\" class=\"btn fa fa-trash-o\" aria-hidden=\"true\"></i></th>
                  <th><a href=\"?user/update/{{user.nickname}}\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a></th>
              </tr>
              {% endfor %}
          </table>
        </div>
      </div>
    </div>
  </div><!--/.row-->
</div><!--/.main-->

<!-- Modal -->
{% for user in users%}
<div class=\"modal fade\" id=\"myModal-{{user.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Удалить пользователя</h4>
      </div>
      <div class=\"modal-body\">
        точно брат?
      </div>
      <div class=\"modal-footer\">
        <a href=\"?user/delete/{{user.id}}\"><button type=\"button\" name=\"button\">Удалить</button></a>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Отмена</button>
      </div>
    </div>
  </div>
</div>
  {% endfor %}

{% endblock content %}
", "admin-users-list.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-users-list.tpl.php");
    }
}
