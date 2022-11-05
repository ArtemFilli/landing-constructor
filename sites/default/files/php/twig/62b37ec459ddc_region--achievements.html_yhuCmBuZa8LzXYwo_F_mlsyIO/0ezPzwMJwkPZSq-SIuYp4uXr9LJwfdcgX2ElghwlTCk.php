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

/* themes/LPC/templates/constructor/achievements/region--achievements.html.twig */
class __TwigTemplate_b9f9e3c2555dbaf03edd0f9e42e5878af3614c695bc3f3d81f8151327a482f41 extends \Twig\Template
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
        if (($context["content"] ?? null)) {
            // line 2
            echo "    <div class=\"carousel slide ui-state-default my-4\" id=\"carousel_";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 2, $this->source)), "html", null, true);
            echo "\" data-bs-ride=\"carousel\" data-bs-interval=\"false\">
        <div class=\"control-wrap\">
            <button class=\"carousel-control carousel-control-prev\"
                type=\"button\" data-bs-target=\"#carousel_";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 5, $this->source)), "html", null, true);
            echo "\"
                data-bs-slide=\"prev\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"44\" height=\"44\" fill=\"white\" class=\"bi bi-arrow-left-circle\"
                    viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\"
                        d=\"M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z\" />
                </svg>
            </button>
            <button class=\"carousel-control carousel-control-next\"
                type=\"button\" data-bs-target=\"#carousel_";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 13, $this->source)), "html", null, true);
            echo "\"
                data-bs-slide=\"next\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"44\" height=\"44\" fill=\"white\" class=\"bi bi-arrow-right-circle\"
                    viewBox=\"0 0 16 16\">
                    <path fill-rule=\"evenodd\"
                        d=\"M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z\" />
                </svg>
            </button>
            <button class=\"carousel-control carousel-control-del\" type=\"button\"
                data-del-target=\"#carousel_";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 21, $this->source)), "html", null, true);
            echo "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"44\" height=\"44\" fill=\"white\"
                    class=\"bi bi-x-circle\" viewBox=\"0 0 16 16\">
                    <path
                        d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\" />
                    <path
                        d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\" />
                </svg>
            </button>
            <button class=\"carousel-control carousel-control-clone\" type=\"button\"
                data-clone-target=\"#carousel_";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 31, $this->source)), "html", null, true);
            echo "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"44\" height=\"44\" fill=\"white\"
                    class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
                    <path
                        d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\" />
                    <path
                        d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\" />
                </svg>
            </button>
        </div>
        <div class=\"carousel-inner\">
            ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 42, $this->source), "html", null, true);
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/constructor/achievements/region--achievements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  83 => 31,  70 => 21,  59 => 13,  48 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/constructor/achievements/region--achievements.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\constructor\\achievements\\region--achievements.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2, "clean_class" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'clean_class'],
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
