<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/pages/blog-post.htm */
class __TwigTemplate_1290943130e1288ac7e1104b8790dc887948773590b75aa1b868c45df734b713 extends Twig_Template
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
   
    ";
        // line 3
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPost"] ?? null), "post", array());
        // line 4
        echo "
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
    <hr>
    
    <div class=\"container\">
        <div class=\"content\">";
        // line 9
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "</div>
        
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 12
            echo "            <div class=\"featured-images text-center\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "                    <p>
                        <img
                            data-src=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                echo "\"
                            src=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                echo "\"
                            alt=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
                echo "\"
                            style=\"max-width: 100%\" />
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>
        ";
        }
        // line 24
        echo "        
        <p class=\"info\">
            Erstellt am ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "d.m.Y"), "html", null, true);
        echo "
        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/blog-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  75 => 24,  71 => 22,  61 => 18,  57 => 17,  53 => 16,  49 => 14,  45 => 13,  42 => 12,  40 => 11,  35 => 9,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
   
    {% set post = blogPost.post %}

    <h3>{{post.title}}</h3>
    <hr>
    
    <div class=\"container\">
        <div class=\"content\">{{ post.content_html|raw }}</div>
        
        {% if post.featured_images.count %}
            <div class=\"featured-images text-center\">
                {% for image in post.featured_images %}
                    <p>
                        <img
                            data-src=\"{{ image.filename }}\"
                            src=\"{{ image.path }}\"
                            alt=\"{{ image.description }}\"
                            style=\"max-width: 100%\" />
                    </p>
                {% endfor %}
            </div>
        {% endif %}
        
        <p class=\"info\">
            Erstellt am {{ post.published_at|date('d.m.Y') }}
        </p>
    </div>
</div>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/blog-post.htm", "");
    }
}
