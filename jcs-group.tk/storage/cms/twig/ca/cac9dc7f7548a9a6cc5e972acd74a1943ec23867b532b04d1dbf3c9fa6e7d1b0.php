<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/layout-elements/breadcrumbs.htm */
class __TwigTemplate_ad78ad4070b790f803873adcfa4aac564bf9e622d3e8eb6c08270d795dfdb600 extends Twig_Template
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
        echo "<!-- Page Title
\t\t============================================= -->
<section id=\"page-title\">

    <div class=\"container clearfix\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</h1>
        ";
        // line 7
        if ( !twig_test_empty(($context["slogan"] ?? null))) {
            echo "<span>";
            echo twig_escape_filter($this->env, ($context["slogan"] ?? null), "html", null, true);
            echo "</span> ";
        }
        // line 8
        echo "        ";
        if ( !twig_test_empty(($context["breadcrumbs"] ?? null))) {
            // line 9
            echo "        <ol class=\"breadcrumb\">
            <li><a href=\"";
            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
            echo "\">Главная</a></li>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 12
                echo "                <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "page", array(), "array"));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "text", array(), "array"), "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
        ";
        }
        // line 16
        echo "    </div>

</section><!-- #page-title end -->";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/layout-elements/breadcrumbs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  61 => 14,  50 => 12,  46 => 11,  42 => 10,  39 => 9,  36 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Page Title
\t\t============================================= -->
<section id=\"page-title\">

    <div class=\"container clearfix\">
        <h1>{{ this.page.meta_title }}</h1>
        {% if (slogan is not empty) %}<span>{{ slogan }}</span> {% endif %}
        {% if (breadcrumbs is not empty) %}
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ 'home'|page}}\">Главная</a></li>
            {% for crumb in breadcrumbs %}
                <li><a href=\"{{ crumb['page']|page }}\">{{ crumb['text'] }}</a></li>
            {% endfor %}
        </ol>
        {% endif %}
    </div>

</section><!-- #page-title end -->", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/layout-elements/breadcrumbs.htm", "");
    }
}
