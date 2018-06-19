<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/plugins/concert-list-image.htm */
class __TwigTemplate_3d0da7ad71fbc22a1c371549376f3b503d2f234e353fafaf0be3f910f5e3604a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            echo "                    <div class=\"col-md-3 col-md-offset-1\" >
                        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "eventimage", array()), "getPath", array(), "method"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"col-md-5 center\" >
                        <h3>";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "name", array()), "html", null, true);
            echo "</h3>
                        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "place_link", array()), "html", null, true);
            echo "\"><h5><i class=\"icon-world\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "place", array()), "html", null, true);
            echo "</h5></a>
                        <h4>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["event"], "date_and_time", array()), "d/M/Y H:i"), "html", null, true);
            echo "</h4>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/plugins/concert-list-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  38 => 7,  32 => 6,  26 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for event in events %}
                    <div class=\"col-md-3 col-md-offset-1\" >
                        <img src=\"{{ event.eventimage.getPath() }}\">
                    </div>
                    <div class=\"col-md-5 center\" >
                        <h3>{{ event.type }} {{ event.name }}</h3>
                        <a href=\"{{ event.place_link }}\"><h5><i class=\"icon-world\"></i> {{ event.place }}</h5></a>
                        <h4>{{ event.date_and_time|date(\"d/M/Y H:i\") }}</h4>
                    </div>
                {% endfor %}", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/plugins/concert-list-image.htm", "");
    }
}
