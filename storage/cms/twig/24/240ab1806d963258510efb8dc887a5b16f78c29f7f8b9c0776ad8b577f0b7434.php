<?php

/* /Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/pages/services.htm */
class __TwigTemplate_139ffb9683c760893365c832f229787b5b062dd48fb40382a95f91c78deb7735 extends Twig_Template
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
        echo "<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
    <div class=\"lt-container container\">
        <div class=\"lt-content lt-header-content\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-services/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
    </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
    <div class=\"lt-container container\">
        <div class=\"lt-content lt-mainpage-content\">
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-services/mainpage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  37 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
    <div class=\"lt-container container\">
        <div class=\"lt-content lt-header-content\">
            {% partial \"pages-services/header\" %}
        </div>
    </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
    <div class=\"lt-container container\">
        <div class=\"lt-content lt-mainpage-content\">
            {% partial \"pages-services/mainpage\" %}
        </div>
    </div>
</section>", "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/pages/services.htm", "");
    }
}
