<?php

/* /Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/layouts/octaskin.htm */
class __TwigTemplate_7864d2cdf1fc7d4aa77d0acb5ea36cfdd53d49dd88ec152a4ccc53c51f9c5161 extends Twig_Template
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
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "description", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
    <title>ErisonTech</title>
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icon.png");
        echo "\" />

    ";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_google_fonts", array())) {
            // line 15
            echo "      <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "google_font_family", array()), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_fontawesome", array())) {
            // line 19
            echo "    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
     
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_material_icons", array())) {
            // line 24
            echo "      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_stroke7_icons", array())) {
            // line 28
            echo "      <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/stroke7/stroke7-icon-font.min.css");
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 30
        echo "
    <link href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/scss/style.scss"));
        echo "\" rel=\"stylesheet\">


    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("_addons/css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
    ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 37
        echo "
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_css", array())) {
            // line 39
            echo "      <style>
      ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_css", array()), "html", null, true);
            echo "
      </style>
    ";
        }
        // line 43
        echo "  </head>
  <body class=\"lt-theme-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "config", array()), "code", array()), "html", null, true);
        echo " lt-layout-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "layout", array()), "id", array()), "html", null, true);
        echo " lt-page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
        echo "\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-all/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "          </div>
        </div>
      </section>

      ";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 55
        echo "
      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            ";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-all/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-all/copyright"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "          </div>
        </div>
      </section>
    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "jQuery_version", array()), "html", null, true);
        echo "/jquery.min.js\"></script>
    <script src=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/materialize.min.js", 1 => "assets/js/theme.js"));
        echo "\"></script>

    ";
        // line 76
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "load_octobercms_framework", array())) {
            // line 77
            echo "      ";
            echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("_addons/js"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "
    ";
        // line 82
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 83
        echo "
    ";
        // line 84
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_js", array())) {
            // line 85
            echo "      <script>
      ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "custom_js", array()), "html", null, true);
            echo "
      </script>
    ";
        }
        // line 89
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/layouts/octaskin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 89,  220 => 86,  217 => 85,  215 => 84,  212 => 83,  209 => 82,  206 => 81,  202 => 80,  199 => 79,  196 => 78,  188 => 77,  186 => 76,  181 => 74,  177 => 73,  170 => 68,  166 => 67,  157 => 60,  153 => 59,  147 => 55,  145 => 54,  139 => 50,  135 => 49,  123 => 44,  120 => 43,  114 => 40,  111 => 39,  109 => 38,  106 => 37,  103 => 36,  100 => 35,  96 => 34,  90 => 31,  87 => 30,  81 => 28,  79 => 27,  76 => 26,  72 => 24,  70 => 23,  67 => 22,  62 => 19,  60 => 18,  57 => 17,  51 => 15,  49 => 14,  44 => 12,  40 => 11,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>ErisonTech</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />

    {% if this.theme.load_google_fonts %}
      <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_fontawesome %}
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
     
    {% endif %}

    {% if this.theme.load_material_icons %}
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    {% endif %}

    {% if this.theme.load_stroke7_icons %}
      <link href=\"{{ 'assets/css/stroke7/stroke7-icon-font.min.css'|theme }}\" rel=\"stylesheet\">
    {% endif %}

    <link href=\"{{ ['assets/scss/style.scss']|theme }}\" rel=\"stylesheet\">


    {% partial \"_addons/css\" %}

    {% styles %}

    {% if this.theme.custom_css %}
      <style>
      {{ this.theme.custom_css }}
      </style>
    {% endif %}
  </head>
  <body class=\"lt-theme-{{ this.theme.config.code }} lt-layout-{{ this.layout.id }} lt-page-{{ this.page.id }}\">
    <div id=\"lt-page-surround\">
      <section id=\"lt-navigation\" class=\"lt-section section lt-no-background\">
        <div class=\"lt-row row\">
          <div class=\"lt-content lt-navigation-content\">
            {% partial \"pages-all/navigation\" %}
          </div>
        </div>
      </section>

      {% page %}

      <section id=\"lt-footer\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-footer-content\">
            {% partial \"pages-all/footer\" %}
          </div>
        </div>
      </section>

      <section id=\"lt-copyright\" class=\"lt-section section\">
        <div class=\"lt-container container\">
          <div class=\"lt-content lt-copyright-content\">
            {% partial \"pages-all/copyright\" %}
          </div>
        </div>
      </section>
    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script>
    <script src=\"{{ ['assets/js/materialize.min.js','assets/js/theme.js']|theme }}\"></script>

    {% if this.theme.load_octobercms_framework %}
      {% framework extras %}
    {% endif %}

    {% partial \"_addons/js\" %}

    {% scripts %}

    {% if this.theme.custom_js %}
      <script>
      {{ this.theme.custom_js }}
      </script>
    {% endif %}
  </body>
</html>", "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/layouts/octaskin.htm", "");
    }
}
