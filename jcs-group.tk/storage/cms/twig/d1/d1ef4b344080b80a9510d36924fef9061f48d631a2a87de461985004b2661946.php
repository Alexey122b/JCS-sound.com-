<?php

/* /var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/pages/home.htm */
class __TwigTemplate_3af575a4909e58e6a449213df31041bff3edd6b761738b61ba677b686071896a extends Twig_Template
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
        echo "<div class=\"content-wrap\">
<div class=\"container clearfix\">

<div class=\"row\">
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("plugins/slider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</div>


<div class=\"content-wrap row\">
        <div class=\"entry clearfix\">
        <h2 class=\"center\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("concert");
        echo "\">КОНЦЕРТЫ</a></h2>
            
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("plugins/concert-list-image"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
        </div>
</div>

<div class=\"content-wrap row\">
    <div class=\"col-md-6\">
        <div class=\"entry clearfix\">
        <h2 class=\"center\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media/video");
        echo "\">ВИДЕО</a></h2>
             
            <div class=\"entry-content\">
                <iframe class=\"col-md-12\" height=\"320\"  src=\"https://www.youtube.com/embed/j3-tboqYoqI\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media/video");
        echo "\" class=\"button button-3d\">Смотреть все</a>
            </div>
        </div>
        <div class=\"entry clearfix\">
        <h2 class=\"center\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media/audio");
        echo "\">МУЗЫКА</a></h2>
            
            <div class=\"entry-content\">
                <iframe class=\"col-md-12\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/53471363&amp;color=%230066cc&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true\"></iframe>
                <a href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media/audio");
        echo "\" class=\"button button-3d\">Слушать все</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"postcontent nobottommargin clearfix\">
        <!-- Posts
\t\t\t\t\t\t============================================= -->
        <div id=\"posts\" class=\"small-thumbs\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 43
            echo "            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    ";
            // line 45
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "count", array())) {
                // line 46
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 47
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\" data-lightbox=\"image\"><img class=\"image_fade\" data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
                    echo "\"></a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    ";
            }
            // line 50
            echo "                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M-d-y"), "html", null, true);
            echo "</li>
                        <li><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "user", array()), "url", array()), "html", null, true);
            echo "\"><i class=\"icon-user\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "user", array()), "getFullNameAttribute", array()), "html", null, true);
            echo "</a></li>
                        <li><i class=\"icon-folder-open\"></i> ";
            // line 58
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()), "count", array())) {
                echo " in
                            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 60
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 61
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                            ";
            }
            echo "</li>
                        <li><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\"><i class=\"icon-camera-retro\"></i></a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()), "html", null, true);
            echo ".</p>
                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\"class=\"more-link\">Подробнее</a>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        </div>

        ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout-elements/pagination"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "
    </div>
    <a href=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("media/video");
        echo "\" class=\"button button-3d\">Смотреть все</a>
</div>


";
        // line 82
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPosts"] ?? null), "posts", array());
        // line 83
        echo "<div class=\"row\">
    <div class=\"postcontent nobottommargin clearfix\">
        <!-- Posts
\t\t\t\t\t\t============================================= -->
        <div id=\"posts\" class=\"small-thumbs\">
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 89
            echo "            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    ";
            // line 91
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "count", array())) {
                // line 92
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 93
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\" data-lightbox=\"image\"><img class=\"image_fade\" data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
                    echo "\"></a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                    ";
            }
            // line 96
            echo "                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M-d-y"), "html", null, true);
            echo "</li>
                        <li><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "user", array()), "url", array()), "html", null, true);
            echo "\"><i class=\"icon-user\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "user", array()), "getFullNameAttribute", array()), "html", null, true);
            echo "</a></li>
                        <li><i class=\"icon-folder-open\"></i> ";
            // line 104
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()), "count", array())) {
                echo " in
                            ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 106
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 107
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                            ";
            }
            echo "</li>
                        <li><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\"><i class=\"icon-camera-retro\"></i></a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()), "html", null, true);
            echo ".</p>
                        <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\"class=\"more-link\">Подробнее</a>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
        </div>

        ";
        // line 121
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("layout-elements/pagination"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 122
        echo "
    </div>
    
</div>

</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 122,  373 => 121,  368 => 118,  357 => 113,  353 => 112,  347 => 109,  342 => 108,  328 => 107,  319 => 106,  302 => 105,  298 => 104,  292 => 103,  288 => 102,  280 => 99,  275 => 96,  272 => 95,  257 => 93,  252 => 92,  250 => 91,  246 => 89,  242 => 88,  235 => 83,  233 => 82,  226 => 78,  222 => 76,  218 => 75,  213 => 72,  202 => 67,  198 => 66,  192 => 63,  187 => 62,  173 => 61,  164 => 60,  147 => 59,  143 => 58,  137 => 57,  133 => 56,  125 => 53,  120 => 50,  117 => 49,  102 => 47,  97 => 46,  95 => 45,  91 => 43,  87 => 42,  75 => 33,  68 => 29,  61 => 25,  54 => 21,  45 => 14,  41 => 13,  36 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-wrap\">
<div class=\"container clearfix\">

<div class=\"row\">
{% partial 'plugins/slider' %}
</div>


<div class=\"content-wrap row\">
        <div class=\"entry clearfix\">
        <h2 class=\"center\"><a href=\"{{ 'concert'|page }}\">КОНЦЕРТЫ</a></h2>
            
                {% partial 'plugins/concert-list-image' %}

        </div>
</div>

<div class=\"content-wrap row\">
    <div class=\"col-md-6\">
        <div class=\"entry clearfix\">
        <h2 class=\"center\"><a href=\"{{ 'media/video'|page }}\">ВИДЕО</a></h2>
             
            <div class=\"entry-content\">
                <iframe class=\"col-md-12\" height=\"320\"  src=\"https://www.youtube.com/embed/j3-tboqYoqI\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>
                <a href=\"{{ 'media/video'|page }}\" class=\"button button-3d\">Смотреть все</a>
            </div>
        </div>
        <div class=\"entry clearfix\">
        <h2 class=\"center\"><a href=\"{{ 'media/audio'|page }}\">МУЗЫКА</a></h2>
            
            <div class=\"entry-content\">
                <iframe class=\"col-md-12\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/53471363&amp;color=%230066cc&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true\"></iframe>
                <a href=\"{{ 'media/audio'|page }}\" class=\"button button-3d\">Слушать все</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"postcontent nobottommargin clearfix\">
        <!-- Posts
\t\t\t\t\t\t============================================= -->
        <div id=\"posts\" class=\"small-thumbs\">
            {% for post in posts %}
            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    {% if post.featured_images.count %}
                    {% for image in post.featured_images %}
                    <a href=\"{{ post.url }}\" data-lightbox=\"image\"><img class=\"image_fade\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\"></a>
                    {% endfor %}
                    {% endif %}
                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> {{ post.published_at | date('M-d-y') }}</li>
                        <li><a href=\"{{ post.user.url }}\"><i class=\"icon-user\"></i> {{ post.user.getFullNameAttribute }}</a></li>
                        <li><i class=\"icon-folder-open\"></i> {% if post.categories.count %} in
                            {% for category in post.categories %}
                            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                            {% endfor %}
                            {% endif %}</li>
                        <li><a href=\"{{ post.url }}\"><i class=\"icon-camera-retro\"></i></a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>{{ post.summary }}.</p>
                        <a href=\"{{ post.url }}\"class=\"more-link\">Подробнее</a>
                    </div>
                </div>
            </div>
            {% endfor %}

        </div>

        {% partial \"layout-elements/pagination\"%}

    </div>
    <a href=\"{{ 'media/video'|page }}\" class=\"button button-3d\">Смотреть все</a>
</div>


{% set posts = blogPosts.posts %}
<div class=\"row\">
    <div class=\"postcontent nobottommargin clearfix\">
        <!-- Posts
\t\t\t\t\t\t============================================= -->
        <div id=\"posts\" class=\"small-thumbs\">
            {% for post in posts %}
            <div class=\"entry clearfix\">
                <div class=\"entry-image\">
                    {% if post.featured_images.count %}
                    {% for image in post.featured_images %}
                    <a href=\"{{ post.url }}\" data-lightbox=\"image\"><img class=\"image_fade\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description }}\"></a>
                    {% endfor %}
                    {% endif %}
                </div>
                <div class=\"entry-c\">
                    <div class=\"entry-title\">
                        <h2><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> {{ post.published_at | date('M-d-y') }}</li>
                        <li><a href=\"{{ post.user.url }}\"><i class=\"icon-user\"></i> {{ post.user.getFullNameAttribute }}</a></li>
                        <li><i class=\"icon-folder-open\"></i> {% if post.categories.count %} in
                            {% for category in post.categories %}
                            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                            {% endfor %}
                            {% endif %}</li>
                        <li><a href=\"{{ post.url }}\"><i class=\"icon-camera-retro\"></i></a></li>
                    </ul>
                    <div class=\"entry-content\">
                        <p>{{ post.summary }}.</p>
                        <a href=\"{{ post.url }}\"class=\"more-link\">Подробнее</a>
                    </div>
                </div>
            </div>
            {% endfor %}

        </div>

        {% partial \"layout-elements/pagination\"%}

    </div>
    
</div>

</div>
</div>", "/var/www/vhosts/cdx.kz/jcs-group.tk/themes/jimmyhung-october-canvas-blog/pages/home.htm", "");
    }
}
