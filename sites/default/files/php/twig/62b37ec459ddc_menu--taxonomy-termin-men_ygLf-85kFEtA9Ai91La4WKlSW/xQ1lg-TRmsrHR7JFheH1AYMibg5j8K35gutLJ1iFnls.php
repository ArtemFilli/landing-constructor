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

/* themes/LPC/templates/articles/menu--taxonomy-termin-menu.html.twig */
class __TwigTemplate_2ffcf81a790615c1e23c3d845dbce31e4663e96eb44ca08b2e3e308f109c1950 extends \Twig\Template
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
        if (($context["items"] ?? null)) {
            // line 2
            echo "  <ul class=\"d-flex flex-wrap mt-5rem\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    ";
                // line 5
                $context["classes"] = [0 => "menu-item", 1 => "taxonomy-sp", 2 => ((twig_get_attribute($this->env, $this->source,                 // line 8
$context["item"], "is_expanded", [], "any", false, false, true, 8)) ? ("menu-item--expanded") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                 // line 9
$context["item"], "is_collapsed", [], "any", false, false, true, 9)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                 // line 10
$context["item"], "in_active_trail", [], "any", false, false, true, 10)) ? ("menu-item--active-trail") : (""))];
                // line 13
                echo "    <li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 13), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 13), 13, $this->source), "html", null, true);
                echo ">
      ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 14), 14, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14), 14, $this->source)), "html", null, true);
                echo "
      ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 15)) {
                    // line 16
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["menus"] ?? null), "menu_links", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 16), 1 => ($context["attributes"] ?? null), 2 => (($context["menu_level"] ?? null) + 1)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "
      ";
                }
                // line 18
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/articles/menu--taxonomy-termin-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  72 => 18,  66 => 16,  64 => 15,  60 => 14,  55 => 13,  53 => 10,  52 => 9,  51 => 8,  50 => 5,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/articles/menu--taxonomy-termin-menu.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\articles\\menu--taxonomy-termin-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 3, "set" => 5);
        static $filters = array("escape" => 13);
        static $functions = array("link" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                ['link']
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
