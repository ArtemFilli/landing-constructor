<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/LPC/templates/page--node--5.html.twig */
class __TwigTemplate_bc853fe8d9517076505bc347a6ac83357e814dc8e88d3395342f4e2ad12141bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header>
  <div class=\"burger\">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"white\" class=\"bi bi-list\" viewBox=\"0 0 16 16\">
      <path fill-rule=\"evenodd\"
                d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\" />
    </svg>
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"white\" class=\"bi bi-arrow-bar-left\" viewBox=\"0 0 16 16\">
      <path fill-rule=\"evenodd\"
                d=\"M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z\" />
    </svg>
  </div>
  ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  <div class=\"overlay\"></div>
</header>

<div class=\"container-xl\">
  ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
</div>

<section class=\"constructor-logo\">
  <div class=\"container-xl\">
    <a href=\"/\">
      <svg width=\"83\" height=\"44\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M.928 43V4.12h7.92v33.504h9.12V43H.928zm25.566 0V4.12H38.83c2.336 0 4.24.448 5.712 1.344 1.472.864 2.56 2.128 3.264 3.792.736 1.664 1.104 3.68 1.104 6.048 0 2.784-.48 4.96-1.44 6.528-.928 1.568-2.208 2.688-3.84 3.36-1.632.64-3.504.96-5.616.96h-3.6V43h-7.92zm7.92-22.416h2.784c1.152 0 2.032-.176 2.64-.528.64-.384 1.072-.976 1.296-1.776.224-.8.336-1.824.336-3.072 0-1.184-.096-2.176-.288-2.976-.16-.8-.544-1.424-1.152-1.872-.608-.448-1.568-.672-2.88-.672h-2.736v10.896zm34.164 22.944c-2.88 0-5.168-.544-6.864-1.632-1.664-1.088-2.832-2.592-3.504-4.512-.672-1.952-1.008-4.208-1.008-6.768V16.648c0-2.688.336-4.992 1.008-6.912.672-1.952 1.84-3.456 3.504-4.512 1.696-1.056 3.984-1.584 6.864-1.584 2.784 0 4.96.464 6.528 1.392 1.6.928 2.72 2.24 3.36 3.936.672 1.696 1.008 3.664 1.008 5.904v3.264h-7.68v-3.648c0-.896-.048-1.728-.144-2.496-.096-.8-.368-1.44-.816-1.92-.416-.512-1.152-.768-2.208-.768-1.056 0-1.824.256-2.304.768-.48.512-.784 1.184-.912 2.016-.128.8-.192 1.696-.192 2.688V32.44c0 1.088.08 2.048.24 2.88.192.8.528 1.424 1.008 1.872.512.416 1.232.624 2.16.624 1.024 0 1.744-.24 2.16-.72.448-.512.72-1.184.816-2.016.128-.832.192-1.712.192-2.64v-3.792h7.68v3.216c0 2.272-.32 4.288-.96 6.048-.64 1.728-1.744 3.104-3.312 4.128-1.568.992-3.776 1.488-6.624 1.488z\" fill=\"#21354D\"/><path d=\"M.928 40V1.12h7.92v33.504h9.12V40H.928zm25.566 0V1.12H38.83c2.336 0 4.24.448 5.712 1.344 1.472.864 2.56 2.128 3.264 3.792.736 1.664 1.104 3.68 1.104 6.048 0 2.784-.48 4.96-1.44 6.528-.928 1.568-2.208 2.688-3.84 3.36-1.632.64-3.504.96-5.616.96h-3.6V40h-7.92zm7.92-22.416h2.784c1.152 0 2.032-.176 2.64-.528.64-.384 1.072-.976 1.296-1.776.224-.8.336-1.824.336-3.072 0-1.184-.096-2.176-.288-2.976-.16-.8-.544-1.424-1.152-1.872-.608-.448-1.568-.672-2.88-.672h-2.736v10.896zm34.164 22.944c-2.88 0-5.168-.544-6.864-1.632-1.664-1.088-2.832-2.592-3.504-4.512-.672-1.952-1.008-4.208-1.008-6.768V13.648c0-2.688.336-4.992 1.008-6.912.672-1.952 1.84-3.456 3.504-4.512C63.41 1.168 65.698.64 68.578.64c2.784 0 4.96.464 6.528 1.392 1.6.928 2.72 2.24 3.36 3.936.672 1.696 1.008 3.664 1.008 5.904v3.264h-7.68v-3.648c0-.896-.048-1.728-.144-2.496-.096-.8-.368-1.44-.816-1.92-.416-.512-1.152-.768-2.208-.768-1.056 0-1.824.256-2.304.768-.48.512-.784 1.184-.912 2.016-.128.8-.192 1.696-.192 2.688V29.44c0 1.088.08 2.048.24 2.88.192.8.528 1.424 1.008 1.872.512.416 1.232.624 2.16.624 1.024 0 1.744-.24 2.16-.72.448-.512.72-1.184.816-2.016.128-.832.192-1.712.192-2.64v-3.792h7.68v3.216c0 2.272-.32 4.288-.96 6.048-.64 1.728-1.744 3.104-3.312 4.128-1.568.992-3.776 1.488-6.624 1.488z\" fill=\"#21354D\"/><path d=\"M3.928 43V4.12h7.92v33.504h9.12V43H3.928zm25.566 0V4.12H41.83c2.336 0 4.24.448 5.712 1.344 1.472.864 2.56 2.128 3.264 3.792.736 1.664 1.104 3.68 1.104 6.048 0 2.784-.48 4.96-1.44 6.528-.928 1.568-2.208 2.688-3.84 3.36-1.632.64-3.504.96-5.616.96h-3.6V43h-7.92zm7.92-22.416h2.784c1.152 0 2.032-.176 2.64-.528.64-.384 1.072-.976 1.296-1.776.224-.8.336-1.824.336-3.072 0-1.184-.096-2.176-.288-2.976-.16-.8-.544-1.424-1.152-1.872-.608-.448-1.568-.672-2.88-.672h-2.736v10.896zm34.164 22.944c-2.88 0-5.168-.544-6.864-1.632-1.664-1.088-2.832-2.592-3.504-4.512-.672-1.952-1.008-4.208-1.008-6.768V16.648c0-2.688.336-4.992 1.008-6.912.672-1.952 1.84-3.456 3.504-4.512 1.696-1.056 3.984-1.584 6.864-1.584 2.784 0 4.96.464 6.528 1.392 1.6.928 2.72 2.24 3.36 3.936.672 1.696 1.008 3.664 1.008 5.904v3.264h-7.68v-3.648c0-.896-.048-1.728-.144-2.496-.096-.8-.368-1.44-.816-1.92-.416-.512-1.152-.768-2.208-.768-1.056 0-1.824.256-2.304.768-.48.512-.784 1.184-.912 2.016-.128.8-.192 1.696-.192 2.688V32.44c0 1.088.08 2.048.24 2.88.192.8.528 1.424 1.008 1.872.512.416 1.232.624 2.16.624 1.024 0 1.744-.24 2.16-.72.448-.512.72-1.184.816-2.016.128-.832.192-1.712.192-2.64v-3.792h7.68v3.216c0 2.272-.32 4.288-.96 6.048-.64 1.728-1.744 3.104-3.312 4.128-1.568.992-3.776 1.488-6.624 1.488z\" fill=\"#21354D\"/><path d=\"M3.928 40V1.12h7.92v33.504h9.12V40H3.928zm25.566 0V1.12H41.83c2.336 0 4.24.448 5.712 1.344 1.472.864 2.56 2.128 3.264 3.792.736 1.664 1.104 3.68 1.104 6.048 0 2.784-.48 4.96-1.44 6.528-.928 1.568-2.208 2.688-3.84 3.36-1.632.64-3.504.96-5.616.96h-3.6V40h-7.92zm7.92-22.416h2.784c1.152 0 2.032-.176 2.64-.528.64-.384 1.072-.976 1.296-1.776.224-.8.336-1.824.336-3.072 0-1.184-.096-2.176-.288-2.976-.16-.8-.544-1.424-1.152-1.872-.608-.448-1.568-.672-2.88-.672h-2.736v10.896zm34.164 22.944c-2.88 0-5.168-.544-6.864-1.632-1.664-1.088-2.832-2.592-3.504-4.512-.672-1.952-1.008-4.208-1.008-6.768V13.648c0-2.688.336-4.992 1.008-6.912.672-1.952 1.84-3.456 3.504-4.512C66.41 1.168 68.698.64 71.578.64c2.784 0 4.96.464 6.528 1.392 1.6.928 2.72 2.24 3.36 3.936.672 1.696 1.008 3.664 1.008 5.904v3.264h-7.68v-3.648c0-.896-.048-1.728-.144-2.496-.096-.8-.368-1.44-.816-1.92-.416-.512-1.152-.768-2.208-.768-1.056 0-1.824.256-2.304.768-.48.512-.784 1.184-.912 2.016-.128.8-.192 1.696-.192 2.688V29.44c0 1.088.08 2.048.24 2.88.192.8.528 1.424 1.008 1.872.512.416 1.232.624 2.16.624 1.024 0 1.744-.24 2.16-.72.448-.512.72-1.184.816-2.016.128-.832.192-1.712.192-2.64v-3.792h7.68v3.216c0 2.272-.32 4.288-.96 6.048-.64 1.728-1.744 3.104-3.312 4.128-1.568.992-3.776 1.488-6.624 1.488z\" fill=\"#F4A444\"/></svg>
    </a>
  </div>
</section>
<section class=\"constructor-section\">
  <div class=\"start-text container-xl\">Граница конструктора</div>
  <div class=\"container-xl\">
    <div class=\"constructor-container\">
      <div class=\"selector-theme my-5 d-flex flex-wrap align-items-center\"><span class=\"text\">Цветовая тема:</span>
        <div class=\"selector-theme-circles active brown\" theme=\"brown\"></div>
        <div class=\"selector-theme-circles blue\" theme=\"blue\"></div>
        <div class=\"selector-theme-circles green\" theme=\"green\"></div>
        <div class=\"selector-theme-circles purple\" theme=\"purple\"></div>
        <div class=\"selector-theme-circles orange\" theme=\"orange\"></div>
        <div class=\"selector-theme-circles light_grey\" theme=\"light_grey\"></div>
        <div class=\"selector-theme-circles grey\" theme=\"grey\"></div>
        <div class=\"selector-theme-circles dark_grey\" theme=\"dark_grey\"></div>
        <div class=\"selector-theme-circles dark\" theme=\"dark\"></div>
      </div>
      <div class=\"body-constructor brown\">
        <div class=\"container-xl\">
          <div id=\"sortable\">
            ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "start_screen", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
            ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "text_block", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
            ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "achievements", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
            ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "article", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "
            ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
            ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "form_block", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
            ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_constructor", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"start-text container-xl\">Граница конструктора</div>
  <div class=\"container-xl btn-container\">
    <button id=\"assemble\" class=\"btn-link mx-auto\">Собрать и получить!</button>
    <div class=\"load-file\">
      <div class=\"ajax-progress ajax-progress-fullscreen\">&nbsp;</div>
    </div>
  </div>
</section>

<div class=\"container-xl\">
  ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
</div>

<footer>
  <div class=\"container-xl\">
      ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/page--node--5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 72,  134 => 67,  115 => 51,  111 => 50,  107 => 49,  103 => 48,  99 => 47,  95 => 46,  91 => 45,  60 => 17,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/page--node--5.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\page--node--5.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
