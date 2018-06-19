<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/footer.htm */
class __TwigTemplate_f36bf8db9f569d3582abb6fd4a50132ba0013e6947bdd2d96bf9a95a29a30504 extends Twig_Template
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
        echo "<!-- Footer Widgets
\t\t\t\t============================================= -->
\t\t\t\t<div class=\"footer-widgets-wrap clearfix\">

\t\t\t\t\t<div class=\"col_two_third\">

\t\t\t\t\t\t<div class=\"col_half\">

\t\t\t\t\t\t\t<div class=\"widget widget_links clearfix\">
\t\t\t\t\t\t\t    <h4>Ссылки</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navitems"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col_one_third col_last\">

\t\t\t\t\t\t\t<div class=\"widget clearfix\">
\t\t\t\t\t\t\t\t<h4>Последние новости</h4>
\t\t\t\t\t\t\t\t<div id=\"post-list-footer\">
\t\t\t\t\t\t\t\t    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t<div class=\"spost clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-c\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M-d-y"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col_one_third col_last\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sociallink"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div><!-- .footer-widgets-wrap end -->";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 49,  91 => 48,  76 => 35,  65 => 30,  57 => 27,  52 => 24,  48 => 23,  36 => 13,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer Widgets
\t\t\t\t============================================= -->
\t\t\t\t<div class=\"footer-widgets-wrap clearfix\">

\t\t\t\t\t<div class=\"col_two_third\">

\t\t\t\t\t\t<div class=\"col_half\">

\t\t\t\t\t\t\t<div class=\"widget widget_links clearfix\">
\t\t\t\t\t\t\t    <h4>Ссылки</h4>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t    {% partial 'site/navitems' %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col_one_third col_last\">

\t\t\t\t\t\t\t<div class=\"widget clearfix\">
\t\t\t\t\t\t\t\t<h4>Последние новости</h4>
\t\t\t\t\t\t\t\t<div id=\"post-list-footer\">
\t\t\t\t\t\t\t\t    {% for post in posts %}
\t\t\t\t\t\t\t\t\t<div class=\"spost clearfix\">
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-c\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"{{ post.url }}\" rel=\"nofollow\">{{ post.title }}</a></h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>{{ post.published_at|date(\"M-d-y\") }}</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col_one_third col_last\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t{% partial 'site/sociallink' %}

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div><!-- .footer-widgets-wrap end -->", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/footer.htm", "");
    }
}
