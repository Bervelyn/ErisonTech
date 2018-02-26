<?php

/* /Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/partials/pages-all/copyright.htm */
class __TwigTemplate_b1d7e64d9d501f615b0546f6efef0a3e60821291ba4f63a9630c04ff22c0c848 extends Twig_Template
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
        echo "<div class=\"lt-row row\">
  ";
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("copyright"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        echo "</div>
<div class=\"lt-row row\">
  ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("social"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/partials/pages-all/copyright.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  {% content \"copyright\" %}
</div>
<div class=\"lt-row row\">
  {% content \"social\" %}
</div>", "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/partials/pages-all/copyright.htm", "");
    }
}
