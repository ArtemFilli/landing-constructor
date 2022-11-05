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

/* themes/LPC/templates/constructor/form_block/block--form_block_2.html.twig */
class __TwigTemplate_8a8cae786b7810f081c11747045174c12a76165e7db726efb5338f20c0324f0e extends \Twig\Template
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
        $context["classes"] = [0 => "block", 1 => "carousel-item"];
        // line 7
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
    <section class=\"form\">
        <div class=\"container-xl\">
            <h2 class=\"title-1 mb-5\">Случайный текст похож на треск разлетающихся скреп</h2>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-5\">
                    <form>
                        <div class=\"row\">
                            <div class=\"col-12 mb-4\">
                                <p>Случайный текст похож на треск разлетающихся скреп</p><input
                                    class=\"w-100 elemnt-form\" type=\"text\">
                            </div>
                            <div class=\"col-12 mb-4\">
                                <p>Случайный текст похож на треск разлетающихся скреп</p><input
                                    class=\"w-100 elemnt-form\" type=\"text\">
                                <p class=\"text-muted mt-1\">*Случайный текст похож на треск разлетающихся скреп</p>
                            </div>
                            <div class=\"col-12 mb-4\"><button type=\"submit\"
                                    class=\"w-100 btn theme-bg\">Отправить</button>
                                <p class=\"text-muted mt-1\">*Случайный текст похож на треск разлетающихся скреп</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-8 col-md-7\">
                    <p class=\"p-4 big-txt theme-bg\">+7 999 999 99 99</p>
                </div>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/constructor/form_block/block--form_block_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/constructor/form_block/block--form_block_2.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\constructor\\form_block\\block--form_block_2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
