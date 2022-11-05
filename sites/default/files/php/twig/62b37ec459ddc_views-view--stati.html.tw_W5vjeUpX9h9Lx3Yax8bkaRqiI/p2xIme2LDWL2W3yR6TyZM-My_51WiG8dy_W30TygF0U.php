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

/* themes/LPC/templates/articles/views-view--stati.html.twig */
class __TwigTemplate_ce680a055e4e5720a9da43cc816f97eab5d7815f4dca16243c537b5ee3b31b6e extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "row", 1 => "sources-blc", 2 => "d-flex", 3 => "justify-content-center", 4 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 7
($context["id"] ?? null), 7, $this->source))), 5 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 8
($context["id"] ?? null), 8, $this->source)), 6 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 9
($context["display_id"] ?? null), 9, $this->source)), 7 => ((        // line 10
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 10, $this->source))) : (""))];
        // line 13
        echo "<section class=\"articles\">
  <div";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">
    <div id=\"horizontal_scrolling\">
      <div class=\"articles-blc row d-flex flex-column\">
        ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 17, $this->source), "html", null, true);
        echo "
        ";
        // line 18
        if (($context["rows"] ?? null)) {
            // line 19
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 19, $this->source), "html", null, true);
            echo "
        ";
        } elseif (        // line 20
($context["empty"] ?? null)) {
            // line 21
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 21, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 23
        echo "      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/articles/views-view--stati.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  67 => 21,  65 => 20,  60 => 19,  58 => 18,  54 => 17,  48 => 14,  45 => 13,  43 => 10,  42 => 9,  41 => 8,  40 => 7,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/articles/views-view--stati.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\articles\\views-view--stati.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 18);
        static $filters = array("clean_class" => 7, "escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
