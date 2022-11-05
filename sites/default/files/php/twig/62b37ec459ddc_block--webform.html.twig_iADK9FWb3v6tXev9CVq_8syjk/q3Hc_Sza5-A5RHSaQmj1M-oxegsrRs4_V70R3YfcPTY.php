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

/* themes/LPC/templates/form/block--webform.html.twig */
class __TwigTemplate_0f550dac539ee02f7692c7458177ab16a50848d4222c6b7a38f93feba1de9621 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4), 4, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null), 5, $this->source)))];
        // line 8
        echo "<section class=\"subscribe_form\">
  <div";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ">
    <div class=\"row d-flex justify-content-center align-items-center\">
      ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 11, $this->source), "html", null, true);
        echo "
      ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 12, $this->source), "html", null, true);
        echo "
      ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "    </div>
  </div>
</section>";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"col-md-4 col-12\">
          <div class=\"subscribe_form-wrap\">
            <div class=\"subscribe_form-form d-flex flex-column\">
              ";
        // line 17
        if (($context["label"] ?? null)) {
            // line 18
            echo "                <h2 class=\"title-1\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 18, $this->source), "html", null, true);
            echo "</h2>
              ";
        }
        // line 20
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 20, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        </div>
        <div class=\"col-8 subscribe_form-cube\">
          <div class=\"subscribe_form-cube-container d-flex justify-content-center align-items-center\">
            <div class=\"cube\">
              <div class=\"front\">
                <img src=\"/themes/LPC/logo.svg\"  loading=\"lazy\">
              </div>
              <div class=\"back\"></div>
              <div class=\"top\"></div>
              <div class=\"bottom\"></div>
              <div class=\"left\"></div>
              <div class=\"right\"></div>
            </div>
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/form/block--webform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 18,  77 => 17,  72 => 14,  68 => 13,  62 => 39,  60 => 13,  56 => 12,  52 => 11,  47 => 9,  44 => 8,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/form/block--webform.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\form\\block--webform.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 13, "if" => 17);
        static $filters = array("clean_class" => 4, "escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
