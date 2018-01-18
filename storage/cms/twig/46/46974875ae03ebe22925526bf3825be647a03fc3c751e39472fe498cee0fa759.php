<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/partials/footer.htm */
class __TwigTemplate_a0060a32592b40bba6bb0294d4f4dd07d7de7ad823ebd9bb6a337286660e2a58 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-bottom\">
    <div class=\"container\">
        <p class=\"text-center\">Diese Seite ist Eigentum von Marc Mayer © 2018 - <a class=\"btn-link\" href=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("impressum");
        echo "\">Impressum</a></p>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-bottom\">
    <div class=\"container\">
        <p class=\"text-center\">Diese Seite ist Eigentum von Marc Mayer © 2018 - <a class=\"btn-link\" href=\"{{'impressum'|page}}\">Impressum</a></p>
    </div>
</nav>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/partials/footer.htm", "");
    }
}
