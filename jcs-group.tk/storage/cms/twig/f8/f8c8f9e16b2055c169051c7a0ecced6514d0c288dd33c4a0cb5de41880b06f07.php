<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/pages/404.htm */
class __TwigTemplate_335089893325a7586ec47d23af1f4380236c9d2b0f7c7b0358a5e17a2fba1f1f extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['breadcrumbs'] = array(0 => array("page" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()), "text" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array())))        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout-elements/breadcrumbs"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
\t\t<!-- Content
\t\t============================================= -->
\t\t<section id=\"content\">

\t\t\t<div class=\"content-wrap\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t<div class=\"col_half nobottommargin\">
\t\t\t\t\t\t<div class=\"error404 center\">404</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col_half nobottommargin col_last\">

\t\t\t\t\t\t<div class=\"heading-block nobottomborder\">
\t\t\t\t\t\t\t<h4>Упсс...! Страница, которую вы запросили, не существует.</h4>
\t\t\t\t\t\t\t<span>Попробуйте вернуться на <a href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">домашнюю страницу</a>.</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4 widget_links topmargin nobottommargin\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navitems"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-8 widget_links topmargin nobottommargin\">
\t\t\t\t\t\t\t";
        // line 29
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['num_in_line'] = 1        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sociallink"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</section><!-- #content end -->";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  61 => 29,  55 => 25,  51 => 24,  43 => 19,  24 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'layout-elements/breadcrumbs' breadcrumbs=[{'page':this.page.id,'text':this.page.meta_title}] %}

\t\t<!-- Content
\t\t============================================= -->
\t\t<section id=\"content\">

\t\t\t<div class=\"content-wrap\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t<div class=\"col_half nobottommargin\">
\t\t\t\t\t\t<div class=\"error404 center\">404</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col_half nobottommargin col_last\">

\t\t\t\t\t\t<div class=\"heading-block nobottomborder\">
\t\t\t\t\t\t\t<h4>Упсс...! Страница, которую вы запросили, не существует.</h4>
\t\t\t\t\t\t\t<span>Попробуйте вернуться на <a href=\"{{ 'home'|page}}\">домашнюю страницу</a>.</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-4 widget_links topmargin nobottommargin\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% partial 'site/navitems' %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-8 widget_links topmargin nobottommargin\">
\t\t\t\t\t\t\t{% partial 'site/sociallink' num_in_line=1 %}
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</section><!-- #content end -->", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/pages/404.htm", "");
    }
}
