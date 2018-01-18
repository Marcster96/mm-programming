<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/layouts/basis.htm */
class __TwigTemplate_9efaec89e06c2ccc93f3d4f71b14b77a61ea135a63e15ab95768c3124701738e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"de\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>MM-Programming | ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/app.css"));
        echo "\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Mono\" rel=\"stylesheet\">

  </head>

  <body>
    <section id=\"basis_nav\">
      ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "    </section>

    <section id=\"basis_content\">
      ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 21
        echo "    </section>

    ";
        // line 23
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "filename", array()) != "home.htm")) {
            // line 24
            echo "      <footer id=\"basis_footer\">
        <!-- Wenn es sich um die Home-Seite handelt wird kein Footer ausgegeben-->
          ";
            // line 26
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "      </footer>
    ";
        }
        // line 29
        echo "    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/layouts/basis.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  67 => 27,  63 => 26,  59 => 24,  57 => 23,  53 => 21,  51 => 20,  46 => 17,  42 => 16,  32 => 9,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"de\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>MM-Programming | {{ this.page.title }}</title>
    <link href=\"{{ ['assets/css/app.css']|theme }}\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Mono\" rel=\"stylesheet\">

  </head>

  <body>
    <section id=\"basis_nav\">
      {% partial \"navbar\" %}
    </section>

    <section id=\"basis_content\">
      {%  page %}
    </section>

    {% if  this.page.filename != 'home.htm' %}
      <footer id=\"basis_footer\">
        <!-- Wenn es sich um die Home-Seite handelt wird kein Footer ausgegeben-->
          {% partial \"footer\" %}
      </footer>
    {% endif %}
    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
  </body>
</html>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/layouts/basis.htm", "");
    }
}
