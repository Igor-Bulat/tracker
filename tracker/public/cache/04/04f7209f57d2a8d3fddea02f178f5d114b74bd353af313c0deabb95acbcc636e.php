<?php

/* admin-add-form.tpl.php */
class __TwigTemplate_57524780734b3b226760a6e8435435f3152eeae0d590992fefeb46bd80e6cc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin-layout.tpl.php", "admin-add-form.tpl.php", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">Form Elements</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" method=\"post\" action=\"?add\">

            <div class=\"form-group\">
              <label>Type</label>
              <input type=\"text\" class=\"form-control\" name=\"type\" placeholder=\"Type\">
            </div>

            <div class=\"form-group\">
              <label>Name</label>
              <input type=\"text\" name=\"name\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Price</label>
              <input type=\"text\" name=\"price\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Width</label>
              <input type=\"text\" name=\"width\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Height</label>
              <input type=\"text\" name=\"height\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Wrapper</label>
              <input type=\"text\" name=\"wrapper\" class=\"form-control\">
            </div>





            <button type=\"submit\" class=\"btn btn-primary\">Submit Button</button>
            <button type=\"reset\" class=\"btn btn-default\">Reset Button</button>
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
        return "admin-add-form.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">Form Elements</div>
      <div class=\"panel-body\">
        <div class=\"col-md-6\">
          <form role=\"form\" method=\"post\" action=\"?add\">

            <div class=\"form-group\">
              <label>Type</label>
              <input type=\"text\" class=\"form-control\" name=\"type\" placeholder=\"Type\">
            </div>

            <div class=\"form-group\">
              <label>Name</label>
              <input type=\"text\" name=\"name\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Price</label>
              <input type=\"text\" name=\"price\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Width</label>
              <input type=\"text\" name=\"width\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Height</label>
              <input type=\"text\" name=\"height\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label>Wrapper</label>
              <input type=\"text\" name=\"wrapper\" class=\"form-control\">
            </div>





            <button type=\"submit\" class=\"btn btn-primary\">Submit Button</button>
            <button type=\"reset\" class=\"btn btn-default\">Reset Button</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.col-->
</div><!-- /.row -->
</div>
{%endblock%}
", "admin-add-form.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/admin-add-form.tpl.php");
    }
}
