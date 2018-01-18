<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/pages/home.htm */
class __TwigTemplate_aa4a3ef0f845c97491f9a619663363706dd603d13da8798798068ce2384ae10f extends Twig_Template
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
        echo "<div id=\"homeJumbotron\">
    <h1 class=\"text-center\">Willkommen!</h1>
    <h2 class=\"text-center\">Mein Name ist Marc Mayer</h2>
    <img id=\"meinBild\" class=\"img-circle\" src=\"";
        // line 4
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("ich.png");
        echo "\">

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"homeJumbotron\">
    <h1 class=\"text-center\">Willkommen!</h1>
    <h2 class=\"text-center\">Mein Name ist Marc Mayer</h2>
    <img id=\"meinBild\" class=\"img-circle\" src=\"{{ 'ich.png'|media }}\">

</div>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/home.htm", "");
    }
}
