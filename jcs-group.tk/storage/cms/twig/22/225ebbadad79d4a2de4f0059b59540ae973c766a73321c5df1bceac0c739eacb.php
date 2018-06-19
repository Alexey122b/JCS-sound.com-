<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/layouts/default.htm */
class __TwigTemplate_07a972c14fccc77220a7c54cb441156696596a29e5aac6e061e131412afe2a9b extends Twig_Template
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
<html dir=\"ltr\" lang=\"en-US\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"author\" content=\"SemiColonWeb\" />
    ";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 6
        echo "        <link href=\"//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/style.css", 2 => "assets/css/dark.css", 3 => "assets/css/swiper.css", 4 => "assets/css/font-icons.css", 5 => "assets/css/animate.css", 6 => "assets/css/magnific-popup.css", 7 => "assets/css/responsive.css"));
        // line 16
        echo "\" rel=\"stylesheet\">
            
            <link rel=\"icon\" href=\"";
        // line 18
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("logo/logo_64_64.png");
        echo "\" type=\"image/png\" sizes=\"16x16\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->
    <title>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo " | Казахстанская джаз группа JCS</title>
    <body class=\"stretched no-transition\">
        <!-- The Main Wrapper
\t============================================= -->
\t<div id=\"wrapper\" class=\"clearfix\">


\t\t<!-- Header
\t\t============================================= -->
\t\t<header id=\"header\" class=\"sticky-style-2\">

\t\t\t \t\t\t\t\t\t    
<div class=\"container clearfix\">

\t\t\t\t<!-- Logo
\t\t\t\t============================================= -->
\t\t\t\t<div id=\"logo\" class=\"divcenter primary-menu\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"standard-logo\" ><img class=\"divcenter\" src=\"";
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter("logo/logo.png");
        echo "\" alt=\"JCS logo\"></a>
\t\t\t\t</div><!-- #logo end -->

\t\t\t</div>
\t\t\t<div id=\"header-wrap\">

\t\t\t\t<!-- Primary Navigation
\t\t\t\t============================================= -->
\t\t\t\t<nav id=\"primary-menu\" class=\"style-2 center\">
\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t<div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t    ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navitems"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "\t\t\t\t\t\t    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sociallinkli"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</nav><!-- #primary-menu end -->

\t\t\t</div>

\t\t</header>
        
\t\t<!-- Site Content
\t\t============================================= -->
\t\t<section id=\"content\">
\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 68
        echo "\t\t</section>

\t\t<!-- Footer
\t\t============================================= -->
\t\t<footer id=\"footer\" class=\"dark\">

            <div class=\"container\">
            ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "            </div>
            
\t\t\t<!-- Copyrights
\t\t\t============================================= -->
\t\t\t<div id=\"copyrights\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/copyrights"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "
\t\t\t\t</div>

\t\t\t</div>

\t\t</footer>

\t</div>
\t
\t<!-- Scripts -->
        <script src=\"";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/plugins.js", 2 => "assets/js/functions.js"));
        // line 99
        echo "\"></script>
        ";
        // line 100
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 101
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 102
        echo "\t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 102,  159 => 101,  152 => 100,  149 => 99,  147 => 95,  135 => 85,  131 => 84,  121 => 76,  117 => 75,  108 => 68,  106 => 67,  92 => 55,  87 => 54,  83 => 53,  66 => 41,  46 => 24,  37 => 18,  33 => 16,  31 => 7,  28 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"author\" content=\"SemiColonWeb\" />
    {% styles %}
        <link href=\"//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ [
                'assets/css/bootstrap.css',
                'assets/style.css',
                'assets/css/dark.css',
                'assets/css/swiper.css',
                'assets/css/font-icons.css',
                'assets/css/animate.css',
                'assets/css/magnific-popup.css',
                'assets/css/responsive.css'
            ]|theme }}\" rel=\"stylesheet\">
            
            <link rel=\"icon\" href=\"{{ \"logo/logo_64_64.png\" | media}}\" type=\"image/png\" sizes=\"16x16\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->
    <title>{{ this.page.meta_title }} | Казахстанская джаз группа JCS</title>
    <body class=\"stretched no-transition\">
        <!-- The Main Wrapper
\t============================================= -->
\t<div id=\"wrapper\" class=\"clearfix\">


\t\t<!-- Header
\t\t============================================= -->
\t\t<header id=\"header\" class=\"sticky-style-2\">

\t\t\t \t\t\t\t\t\t    
<div class=\"container clearfix\">

\t\t\t\t<!-- Logo
\t\t\t\t============================================= -->
\t\t\t\t<div id=\"logo\" class=\"divcenter primary-menu\">
\t\t\t\t\t<a href=\"{{ 'home'|page }}\" class=\"standard-logo\" ><img class=\"divcenter\" src=\"{{ \"logo/logo.png\"|media }}\" alt=\"JCS logo\"></a>
\t\t\t\t</div><!-- #logo end -->

\t\t\t</div>
\t\t\t<div id=\"header-wrap\">

\t\t\t\t<!-- Primary Navigation
\t\t\t\t============================================= -->
\t\t\t\t<nav id=\"primary-menu\" class=\"style-2 center\">
\t\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t\t<div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t    {% partial 'site/navitems'%}
\t\t\t\t\t\t    {% partial 'site/sociallinkli'%}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</nav><!-- #primary-menu end -->

\t\t\t</div>

\t\t</header>
        
\t\t<!-- Site Content
\t\t============================================= -->
\t\t<section id=\"content\">
\t\t\t\t\t{% page %}
\t\t</section>

\t\t<!-- Footer
\t\t============================================= -->
\t\t<footer id=\"footer\" class=\"dark\">

            <div class=\"container\">
            {% partial \"site/footer\" %}
            </div>
            
\t\t\t<!-- Copyrights
\t\t\t============================================= -->
\t\t\t<div id=\"copyrights\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t{% partial \"site/copyrights\" %}

\t\t\t\t</div>

\t\t\t</div>

\t\t</footer>

\t</div>
\t
\t<!-- Scripts -->
        <script src=\"{{ [
            'assets/js/jquery.js',
            'assets/js/plugins.js',
            'assets/js/functions.js'
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
\t
    </body>
</html>", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/layouts/default.htm", "");
    }
}
