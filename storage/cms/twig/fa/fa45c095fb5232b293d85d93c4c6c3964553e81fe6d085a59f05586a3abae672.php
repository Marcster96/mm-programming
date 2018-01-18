<?php

/* D:\Webentwickler\webspace\htdocs\mm-programming/themes/mm-programming/pages/sql-blog.htm */
class __TwigTemplate_77403d129d82547d93f3c9646fb12a75251a3fa454b661fdcce7b43d5e266373 extends Twig_Template
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
    <h3>SQL Blog</h3>
    <hr>
    ";
        // line 4
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPosts"] ?? null), "posts", array());
        // line 5
        echo "
<ul class=\"list-group\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "        <li class=\"list-group-item\">
            <h3><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h3>

            <p class=\"excerpt\">";
            // line 11
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array());
            echo "</p>
            <br>
            <p class=\"info\">
                Erstellt am ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "d.m.Y"), "html", null, true);
            echo "
            </p>


        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>

";
        // line 24
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 25
            echo "    <ul class=\"pagination\">
        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 27
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 32
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()))) {
                // line 37
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 39
            echo "    </ul>
";
        }
        // line 41
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/sql-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  122 => 39,  116 => 37,  114 => 36,  111 => 35,  100 => 32,  95 => 31,  91 => 30,  88 => 29,  82 => 27,  80 => 26,  77 => 25,  75 => 24,  71 => 22,  62 => 20,  51 => 14,  45 => 11,  38 => 9,  35 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <h3>SQL Blog</h3>
    <hr>
    {% set posts = blogPosts.posts %}

<ul class=\"list-group\">
    {% for post in posts %}
        <li class=\"list-group-item\">
            <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>

            <p class=\"excerpt\">{{ post.summary|raw }}</p>
            <br>
            <p class=\"info\">
                Erstellt am {{ post.published_at|date('d.m.Y') }}
            </p>


        </li>
    {% else %}
        <li class=\"no-data\">{{ noPostsMessage }}</li>
    {% endfor %}
</ul>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
</div>", "D:\\Webentwickler\\webspace\\htdocs\\mm-programming/themes/mm-programming/pages/sql-blog.htm", "");
    }
}
