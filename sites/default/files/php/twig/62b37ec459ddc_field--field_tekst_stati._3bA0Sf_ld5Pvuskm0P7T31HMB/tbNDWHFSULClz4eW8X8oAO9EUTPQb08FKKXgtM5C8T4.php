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

/* themes/LPC/templates/articles/field--field_tekst_stati.html.twig */
class __TwigTemplate_0e677c1900be64b57c7a70bd657e5b24794ef9b8172d29f811b3d438ba88bb6b extends \Twig\Template
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
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 4
($context["field_name"] ?? null), 4, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["field_type"] ?? null), 5, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 6
($context["label_display"] ?? null), 6, $this->source)), 4 => (((        // line 7
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 11
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 13
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 16
        echo "
";
        // line 17
        if (($context["label_hidden"] ?? null)) {
            // line 18
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 19
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo ">
      ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 21), "addClass", [0 => "field__item"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "</div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "    </div>
  ";
            } else {
                // line 25
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "  ";
            }
        } else {
            // line 30
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
    ";
            // line 31
            if (($context["multiple"] ?? null)) {
                // line 32
                echo "      <div class=\"field__items\">
    ";
            }
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 35), "addClass", [0 => "field__item"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 38
                echo "      </div>
    ";
            }
            // line 40
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/articles/field--field_tekst_stati.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 40,  130 => 38,  127 => 37,  116 => 35,  111 => 34,  107 => 32,  105 => 31,  100 => 30,  96 => 28,  85 => 26,  80 => 25,  76 => 23,  65 => 21,  61 => 20,  56 => 19,  53 => 18,  51 => 17,  48 => 16,  46 => 13,  45 => 11,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/articles/field--field_tekst_stati.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\articles\\field--field_tekst_stati.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 17, "for" => 20);
        static $filters = array("clean_class" => 4, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
