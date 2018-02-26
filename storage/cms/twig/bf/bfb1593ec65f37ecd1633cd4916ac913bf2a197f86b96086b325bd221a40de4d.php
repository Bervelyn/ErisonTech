<?php

/* /Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/partials/pages-contact/header.htm */
class __TwigTemplate_5a658146418bbf9837c865277e58ab720c00bcb50feaaae53d6a5df04bd7b55b extends Twig_Template
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
  <div class=\"lt-col col s12\">
    <div class=\"lt-parallax-header parallax-container\" style=\"height: 400px;\">
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/contact/header/img-01.jpg");
        echo "\" alt=\"image\"></div>
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
            <h2 class=\"lt-title\">Contact</h2>
            <p class=\"lt-subtitle flow-text\">Keep in Touch with Us</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/partials/pages-contact/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-parallax-header parallax-container\" style=\"height: 400px;\">
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/contact/header/img-01.jpg'|theme }}\" alt=\"image\"></div>
      <div class=\"lt-parallax-content\">
        <div class=\"valign-wrapper\" style=\"height: 400px;\">
          <div class=\"valign\">
            <h2 class=\"lt-title\">Contact</h2>
            <p class=\"lt-subtitle flow-text\">Keep in Touch with Us</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "/Users/asamoah/Desktop/Today/ErisonTech/Techweb/themes/laratify-octobercms-octaskin/partials/pages-contact/header.htm", "");
    }
}
