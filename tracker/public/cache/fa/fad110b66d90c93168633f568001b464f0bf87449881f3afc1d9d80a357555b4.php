<?php

/* navbar.tpl.php */
class __TwigTemplate_72c7f52b55e7da40a900f0ee592c0488bde030e10600ac0f00e2553c4f9b20ed extends Twig_Template
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
        echo "<ul class=\"w3-navbar w3-black\">
  <li class=\"uppercase\"><a href=\"./\">";
        // line 2
        echo twig_escape_filter($this->env, trans("Home", "Главная", "Principala"), "html", null, true);
        echo "</a></li>
  <li class=\"uppercase\"><a href=\"?torrent/list\">";
        // line 3
        echo twig_escape_filter($this->env, trans("Torrents", "Торренты", "Torrentele"), "html", null, true);
        echo "</a></li>
  <li class=\"uppercase\"><a href=\"?user/list\">";
        // line 4
        echo twig_escape_filter($this->env, trans("Users", "Пользователи", "Utilizatorii"), "html", null, true);
        echo "</a></li>

 <!-- ";
        // line 6
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ($context["login"] ?? null)), "html", null, true);
        echo " -->
 ";
        // line 7
        if ((($context["login"] ?? null) == false)) {
            // line 8
            echo "  <li class=\"w3-right uppercase\">
  <a href=\"?user/login\">";
            // line 9
            echo twig_escape_filter($this->env, trans("Login", "Логин", "Intrare"), "html", null, true);
            echo "</a>
  </li>
  <li class=\"w3-right uppercase\"><a href=\"?user/create\">";
            // line 11
            echo twig_escape_filter($this->env, trans("Register", "Регистрация", "Registratie"), "html", null, true);
            echo "</a></li>
  <li class=\"w3-left uppercase\"><a href=\"?user/login\">";
            // line 12
            echo twig_escape_filter($this->env, trans("Create torrent", "Создать торрент", "Creaza torrent nou"), "html", null, true);
            echo "</a></li>
    ";
        } else {
            // line 14
            echo "    <li class=\"w3-right uppercase\">
    <a href=\"?user/logout\">";
            // line 15
            echo twig_escape_filter($this->env, trans("Logout", "Выход", "Iesire"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"w3-left uppercase\"><a href=\"?torrent/create\">";
            // line 17
            echo twig_escape_filter($this->env, trans("Create torrent", "Создать торрент", "Creaza torrent nou"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 19
        echo "</ul>
<ul class=\"w3-navbar w3-white w3-right w3-border\">
  <li><a href=\"?lang/en\">EN</a></li>
  <li><a href=\"?lang/ru\">RU</a></li>
  <li><a href=\"?lang/md\">MD</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "navbar.tpl.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  66 => 17,  61 => 15,  58 => 14,  53 => 12,  49 => 11,  44 => 9,  41 => 8,  39 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"w3-navbar w3-black\">
  <li class=\"uppercase\"><a href=\"./\">{{translate('Home','Главная','Principala')}}</a></li>
  <li class=\"uppercase\"><a href=\"?torrent/list\">{{translate('Torrents','Торренты','Torrentele')}}</a></li>
  <li class=\"uppercase\"><a href=\"?user/list\">{{translate('Users','Пользователи','Utilizatorii')}}</a></li>

 <!-- {{ dump(login) }} -->
 {% if login == false %}
  <li class=\"w3-right uppercase\">
  <a href=\"?user/login\">{{translate('Login','Логин','Intrare')}}</a>
  </li>
  <li class=\"w3-right uppercase\"><a href=\"?user/create\">{{translate('Register','Регистрация','Registratie')}}</a></li>
  <li class=\"w3-left uppercase\"><a href=\"?user/login\">{{translate('Create torrent','Создать торрент','Creaza torrent nou')}}</a></li>
    {% else %}
    <li class=\"w3-right uppercase\">
    <a href=\"?user/logout\">{{translate('Logout','Выход','Iesire')}}</a>
    </li>
    <li class=\"w3-left uppercase\"><a href=\"?torrent/create\">{{translate('Create torrent','Создать торрент','Creaza torrent nou')}}</a></li>
    {% endif %}
</ul>
<ul class=\"w3-navbar w3-white w3-right w3-border\">
  <li><a href=\"?lang/en\">EN</a></li>
  <li><a href=\"?lang/ru\">RU</a></li>
  <li><a href=\"?lang/md\">MD</a></li>
</ul>
", "navbar.tpl.php", "C:\\OpenServer\\domains\\tracker\\app\\views\\navbar.tpl.php");
    }
}
