<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/sociallinkli.htm */
class __TwigTemplate_f0f2e4002cd5f30079c2edd257f50c04f8a0002f5692137a1f34486f8b095a21 extends Twig_Template
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
        echo "<li>
    <a href=\"";
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/facebook"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"si-dark si-colored si-facebook\" >
\t<i class=\"icon-facebook\"></i> 
\t</a> 
</li>
<li>
\t<a href=\"";
        // line 7
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/instagram"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"si-dark si-colored si-instagram\">
\t\t<i class=\"icon-instagram\"></i> 
\t</a> 
</li>
<li>
\t<a href=\"";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/youtube"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\" si-dark si-colored si-youtube\" >
\t\t<i class=\"icon-youtube\"></i> 
\t</a>
</li>
<!-- <li>
    <a href=\"tel:";
        // line 17
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/phone"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"si-dark si-colored si-facebook\">
        <i class=\"icon-phone\"></i> <strong>";
        // line 18
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/phone"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</strong>
    </a>
</li> -->";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/sociallinkli.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  52 => 17,  42 => 12,  32 => 7,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li>
    <a href=\"{% content 'social-links/facebook' %}\" class=\"si-dark si-colored si-facebook\" >
\t<i class=\"icon-facebook\"></i> 
\t</a> 
</li>
<li>
\t<a href=\"{% content 'social-links/instagram' %}\" class=\"si-dark si-colored si-instagram\">
\t\t<i class=\"icon-instagram\"></i> 
\t</a> 
</li>
<li>
\t<a href=\"{% content 'social-links/youtube' %}\" class=\" si-dark si-colored si-youtube\" >
\t\t<i class=\"icon-youtube\"></i> 
\t</a>
</li>
<!-- <li>
    <a href=\"tel:{% content 'social-links/phone' %}\" class=\"si-dark si-colored si-facebook\">
        <i class=\"icon-phone\"></i> <strong>{% content 'social-links/phone' %}</strong>
    </a>
</li> -->", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/sociallinkli.htm", "");
    }
}
