<?php

/* comments.tpl.php */
class __TwigTemplate_96306e1ba3de5ea99d480b4271b7b187f7e4f98a5dc3bef0afdeb62b1cb710f9 extends Twig_Template
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
        echo "<form class=\"\" action=\"?comment/create\" method=\"post\">
<textarea name=\"text\" placeholder=\"trans('your comment here','Ваш комментарий')\">
</textarea>
<input type=\"hidden\" name=\"user_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["login"] ?? null), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"torrent_id\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["tor_id"] ?? null), "html", null, true);
        echo "\">
<input type=\"submit\" value=\"Добавить\">
</form>
";
    }

    public function getTemplateName()
    {
        return "comments.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"\" action=\"?comment/create\" method=\"post\">
<textarea name=\"text\" placeholder=\"trans('your comment here','Ваш комментарий')\">
</textarea>
<input type=\"hidden\" name=\"user_id\" value=\"{{login}}\">
<input type=\"hidden\" name=\"torrent_id\" value=\"{{tor_id}}\">
<input type=\"submit\" value=\"Добавить\">
</form>
", "comments.tpl.php", "/home/student/PROJECTS/PHP/stas_op/tracker/app/views/comments.tpl.php");
    }
}
