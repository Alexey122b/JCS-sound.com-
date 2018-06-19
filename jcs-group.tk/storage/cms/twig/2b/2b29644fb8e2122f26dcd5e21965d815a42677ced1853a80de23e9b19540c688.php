<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/plugins/slider.htm */
class __TwigTemplate_99d051405ad2d325453cd0f129c3319c33286c9fde5f2c7d7d970333368b2b99 extends Twig_Template
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
        echo "<section id=\"slider\" class=\" swiper_wrapper clearfix\">

    <div class=\"swiper-container swiper-parent\">
        <div class=\"swiper-wrapper\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "            <div class=\"swiper-slide dark\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "slideimage", array()), "getPath", array(), "method"), "html", null, true);
            echo "');\">
                <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "link", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "link", array())) : ($this->env->getExtension('Cms\Twig\Extension')->pageFilter("concert"))), "html", null, true);
            echo "\"><div class=\"container clearfix\">
                    <div class=\"slider-caption slider-caption-center\">
                        <h2 data-caption-animate=\"fadeInUp\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "title", array()), "html", null, true);
            echo "</h2>
                        <p data-caption-animate=\"fadeInUp\" data-caption-delay=\"20\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["slide"], "subtitle", array()), "html", null, true);
            echo "</p>
                    </div>
                </div></a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        <div id=\"slider-arrow-left\"><i class=\"icon-angle-left\"></i></div>
        <div id=\"slider-arrow-right\"><i class=\"icon-angle-right\"></i></div>
        <div id=\"slide-number\"><div id=\"slide-number-current\"></div><span>/</span><div id=\"slide-number-total\"></div></div>
    </div>

</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/plugins/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  43 => 10,  39 => 9,  34 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"slider\" class=\" swiper_wrapper clearfix\">

    <div class=\"swiper-container swiper-parent\">
        <div class=\"swiper-wrapper\">
            {% for slide in slider %}
            <div class=\"swiper-slide dark\" style=\"background-image: url('{{ slide.slideimage.getPath() }}');\">
                <a href=\"{{ (slide.link)?slide.link:'concert'|page}}\"><div class=\"container clearfix\">
                    <div class=\"slider-caption slider-caption-center\">
                        <h2 data-caption-animate=\"fadeInUp\">{{ slide.title }}</h2>
                        <p data-caption-animate=\"fadeInUp\" data-caption-delay=\"20\">{{ slide.subtitle }}</p>
                    </div>
                </div></a>
            </div>
            {% endfor %}
        </div>
        <div id=\"slider-arrow-left\"><i class=\"icon-angle-left\"></i></div>
        <div id=\"slider-arrow-right\"><i class=\"icon-angle-right\"></i></div>
        <div id=\"slide-number\"><div id=\"slide-number-current\"></div><span>/</span><div id=\"slide-number-total\"></div></div>
    </div>

</section>", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/plugins/slider.htm", "");
    }
}
