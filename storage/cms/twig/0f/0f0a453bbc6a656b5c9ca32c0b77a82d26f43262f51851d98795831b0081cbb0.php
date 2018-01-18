<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/partials/navbar.htm */
class __TwigTemplate_40a58fa5d0111d224332f38b7cbad017e86e6548f5bf3c5b053e193839842f37 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <a class=\"navbar-brand \" href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">MM-Programming</a>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Navigation ein-/ausblenden</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right \">
                <li class=\"nav-item ";
        // line 14
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active ") : (""));
        echo "\">
                    <a class=\"navbar-link\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Startseite</a>
                </li>
                <li class=\"nav-item ";
        // line 17
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "produkte")) ? (" active ") : (""));
        echo "\">
                    <a class=\"navbar-link\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("produkte");
        echo "\">Produkte</a>
                </li>
                <li class=\"nav-item ";
        // line 20
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "sql-blog")) ? (" active ") : (""));
        echo "\">
                    <a class=\"navbar-link\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sql-blog");
        echo "\">SQL Blog</a>
                </li>
                <li class=\"nav-item ";
        // line 23
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "ueber-mich")) ? (" active ") : (""));
        echo "\">
                    <a class=\"navbar-link\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ueber-mich");
        echo "\">Über Mich</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  64 => 23,  59 => 21,  55 => 20,  50 => 18,  46 => 17,  41 => 15,  37 => 14,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <a class=\"navbar-brand \" href=\"{{ 'home'|page}}\">MM-Programming</a>
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Navigation ein-/ausblenden</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right \">
                <li class=\"nav-item {{ this.page.baseFileName == 'home' ? ' active ' }}\">
                    <a class=\"navbar-link\" href=\"{{ 'home'|page }}\">Startseite</a>
                </li>
                <li class=\"nav-item {{ this.page.baseFileName == 'produkte' ? ' active ' }}\">
                    <a class=\"navbar-link\" href=\"{{ 'produkte'|page }}\">Produkte</a>
                </li>
                <li class=\"nav-item {{ this.page.baseFileName == 'sql-blog' ? ' active ' }}\">
                    <a class=\"navbar-link\" href=\"{{ 'sql-blog'|page }}\">SQL Blog</a>
                </li>
                <li class=\"nav-item {{ this.page.baseFileName == 'ueber-mich' ? ' active ' }}\">
                    <a class=\"navbar-link\" href=\"{{ 'ueber-mich'|page }}\">Über Mich</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/partials/navbar.htm", "");
    }
}
