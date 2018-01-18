<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/pages/produkte.htm */
class __TwigTemplate_3bcfbf6778eb1f8fdedee298b53a9b0c905d05f28f4cf2a38eafc03819d64471 extends Twig_Template
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
        echo "<div class=\"container\">
    <h3>Meine Produkte/ Projekte</h3>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">DokumentationsTool v3.0.2</h3>
                </div>
                <div class=\"panel-body\">
                    <img class=\"img-center\" width=\"128\" height=\"128\"  src=\"";
        // line 11
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("dokumentationsTool.png");
        echo "\">
                    <p class=\"text-center\">";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("produkte/DokumentationsTool.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                </div>
                <div class=\"panel-footer\">
                    <a target=\"_blank\" href=\"themes/mm-programming/assets/dokumentationsTool/DokumentationsTool.msi\"> <p class=\"text-left\">Zum Download <i class=\"fa fa-download\"></i></p></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-offset-2 col-md-5\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Webseite - Wesselinger Gebäudeservice</h3>
                </div>
                <div class=\"panel-body\">
                    <img class=\"img-center\" width=\"128\" height=\"128\"  src=\"";
        // line 26
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("webseite.png");
        echo "\">
                    <p class=\"text-center\">";
        // line 27
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("produkte/WGS.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                </div>
                <div class=\"panel-footer\">
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/produkte.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 27,  54 => 26,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <h3>Meine Produkte/ Projekte</h3>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">DokumentationsTool v3.0.2</h3>
                </div>
                <div class=\"panel-body\">
                    <img class=\"img-center\" width=\"128\" height=\"128\"  src=\"{{ 'dokumentationsTool.png'|media }}\">
                    <p class=\"text-center\">{% content 'produkte/DokumentationsTool.htm' %}</p>
                </div>
                <div class=\"panel-footer\">
                    <a target=\"_blank\" href=\"themes/mm-programming/assets/dokumentationsTool/DokumentationsTool.msi\"> <p class=\"text-left\">Zum Download <i class=\"fa fa-download\"></i></p></a>
                </div>
            </div>
        </div>

        <div class=\"col-md-offset-2 col-md-5\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Webseite - Wesselinger Gebäudeservice</h3>
                </div>
                <div class=\"panel-body\">
                    <img class=\"img-center\" width=\"128\" height=\"128\"  src=\"{{ 'webseite.png'|media }}\">
                    <p class=\"text-center\">{% content 'produkte/WGS.htm' %}</p>
                </div>
                <div class=\"panel-footer\">
                </div>
            </div>
        </div>
    </div>
</div>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/produkte.htm", "");
    }
}
