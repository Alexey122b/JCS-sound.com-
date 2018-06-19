<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/sociallink.htm */
class __TwigTemplate_a4ff746aa10a8355ee877088b3df148c135aeebb5f662e30699f6cb7cf7a50d1 extends Twig_Template
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
        $context["num_in_line"] = (((null === ($context["num_in_line"] ?? null))) ? (2) : (($context["num_in_line"] ?? null)));
        // line 2
        $context["colmd"] = (12 / ($context["num_in_line"] ?? null));
        // line 3
        echo "
<div class=\"col-md-";
        // line 4
        echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
        echo " clearfix bottommargin-sm\">
\t<a href=\"tel:";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/phone"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\">
\t\t<i class=\"icon-phone\"></i><i class=\"icon-phone\"></i>
\t</a>
\t<a href=\"tel:";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/phone"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" target=\"_blank\">
\t    <strong>";
        // line 9
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/phone"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</strong>
\t</a>
</div>
<div class=\"col-md-";
        // line 12
        echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
        echo " clearfix bottommargin-sm\">
\t<a href=\"";
        // line 13
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/facebook"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\">
\t\t<i class=\"icon-facebook\"></i><i class=\"icon-facebook\"></i>
\t</a>
\t<a href=\"";
        // line 16
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/facebook"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" target=\"_blank\">
\t    <strong>JCS Sound Group</strong>
\t</a>
</div>
<div class=\"col-md-";
        // line 20
        echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
        echo " clearfix bottommargin-sm\">
\t<a href=\"";
        // line 21
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/instagram"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"social-icon si-dark si-colored si-instagram nobottommargin\">
\t\t<i class=\"icon-instagram\"></i><i class=\"icon-instagram\"></i>
\t</a>
\t<a href=\"";
        // line 24
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/instagram"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" target=\"_blank\">
\t    <strong>@jcssound</strong>
\t</a>
</div>
<div class=\"col-md-";
        // line 28
        echo twig_escape_filter($this->env, ($context["colmd"] ?? null), "html", null, true);
        echo " clearfix bottommargin-sm\">
\t<a href=\"";
        // line 29
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/youtube"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" class=\"social-icon si-dark si-colored si-youtube nobottommargin\" >
\t\t<i class=\"icon-youtube\"></i><i class=\"icon-youtube\"></i>
\t</a>
\t<a href=\"";
        // line 32
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social-links/youtube"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "\" target=\"_blank\">
\t    <strong>JCS Sound</strong>
\t</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/sociallink.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  98 => 29,  94 => 28,  85 => 24,  77 => 21,  73 => 20,  64 => 16,  56 => 13,  52 => 12,  44 => 9,  38 => 8,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set num_in_line = (num_in_line is null)?2:num_in_line %}
{% set colmd = 12/num_in_line%}

<div class=\"col-md-{{colmd}} clearfix bottommargin-sm\">
\t<a href=\"tel:{% content 'social-links/phone' %}\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\">
\t\t<i class=\"icon-phone\"></i><i class=\"icon-phone\"></i>
\t</a>
\t<a href=\"tel:{% content 'social-links/phone' %}\" target=\"_blank\">
\t    <strong>{% content 'social-links/phone' %}</strong>
\t</a>
</div>
<div class=\"col-md-{{colmd}} clearfix bottommargin-sm\">
\t<a href=\"{% content 'social-links/facebook' %}\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\">
\t\t<i class=\"icon-facebook\"></i><i class=\"icon-facebook\"></i>
\t</a>
\t<a href=\"{% content 'social-links/facebook' %}\" target=\"_blank\">
\t    <strong>JCS Sound Group</strong>
\t</a>
</div>
<div class=\"col-md-{{colmd}} clearfix bottommargin-sm\">
\t<a href=\"{% content 'social-links/instagram' %}\" class=\"social-icon si-dark si-colored si-instagram nobottommargin\">
\t\t<i class=\"icon-instagram\"></i><i class=\"icon-instagram\"></i>
\t</a>
\t<a href=\"{% content 'social-links/instagram' %}\" target=\"_blank\">
\t    <strong>@jcssound</strong>
\t</a>
</div>
<div class=\"col-md-{{colmd}} clearfix bottommargin-sm\">
\t<a href=\"{% content 'social-links/youtube' %}\" class=\"social-icon si-dark si-colored si-youtube nobottommargin\" >
\t\t<i class=\"icon-youtube\"></i><i class=\"icon-youtube\"></i>
\t</a>
\t<a href=\"{% content 'social-links/youtube' %}\" target=\"_blank\">
\t    <strong>JCS Sound</strong>
\t</a>
</div>", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/sociallink.htm", "");
    }
}
