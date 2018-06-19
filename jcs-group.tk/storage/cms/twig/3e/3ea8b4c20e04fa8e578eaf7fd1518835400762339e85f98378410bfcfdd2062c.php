<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/navitems.htm */
class __TwigTemplate_8cb53328c4f4edb795b896c079be1df74fa16b527588074968fbe2028b3c9ecb extends Twig_Template
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
        echo "<li ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home"))) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><div>Главная</div></a></li>
<li ";
        // line 2
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == $this->env->getExtension('Cms\Twig\Extension')->pageFilter("news"))) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("news");
        echo "\"><div>Новости</div></a></li>
<li ";
        // line 3
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == $this->env->getExtension('Cms\Twig\Extension')->pageFilter("concert"))) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("concert");
        echo "\"><div>Концерты</div></a></li>
<li ";
        // line 4
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media"))) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media");
        echo "\"><div>Медиа</div></a></li>
<li ";
        // line 5
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about"))) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\"><div>О группе</div></a></li>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/navitems.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  44 => 4,  36 => 3,  28 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li {% if this.page.id=='home'|page %} class=\"current\" {% endif %}><a href=\"{{'home'|page}}\"><div>Главная</div></a></li>
<li {% if this.page.id=='news'|page %} class=\"current\" {% endif %}><a href=\"{{'news'|page}}\"><div>Новости</div></a></li>
<li {% if this.page.id=='concert'|page %} class=\"current\" {% endif %}><a href=\"{{'concert'|page}}\"><div>Концерты</div></a></li>
<li {% if this.page.id=='media'|page %} class=\"current\" {% endif %}><a href=\"{{'media'|page}}\"><div>Медиа</div></a></li>
<li {% if this.page.id=='about'|page %} class=\"current\" {% endif %}><a href=\"{{'about'|page}}\"><div>О группе</div></a></li>", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/partials/site/navitems.htm", "");
    }
}
