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

/* themes/LPC/templates/constructor/gallery/block--gallery_2.html.twig */
class __TwigTemplate_aaaa894e3a893c83696774325cb95140a0fcc7aa33ecf7efc52f9599d2e4a25c extends \Twig\Template
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
    <section class=\"gallery\">
        <div class=\"container-xl\">
            <h2 class=\"title-1 mb-5\">Случайный текст похож на треск разлетающихся скреп</h2>
            <div class=\"gallery-blc-magnific row\">
                <div class=\"col-md-4 col-sm-6 col-12 my-1\"><a
                        class=\"gallery-link\"
                        href=\"https://images.wallpaperscraft.ru/image/single/zdanie_truba_zheltyj_197275_3840x2160.jpg\">
                        <figure class=\"gallery-image\">
                            <picture>
                                <source srcset=\"\" type=\"image/webp\">
                                <img src=\"https://images.wallpaperscraft.ru/image/single/zdanie_truba_zheltyj_197275_3840x2160.jpg\"
                                    alt=\"Изображение\" loading=\"lazy\">
                            </picture>
                        </figure>
                    </a></div>
                <div class=\"col-md-4 col-sm-6 col-12 my-1\"><a
                        class=\"gallery-link\"
                        href=\"https://images.wallpaperscraft.ru/image/single/most_oblaka_minimalizm_125968_3840x2160.jpg\">
                        <figure class=\"gallery-image\">
                            <picture>
                                <source srcset=\"\" type=\"image/webp\">
                                <img src=\"https://images.wallpaperscraft.ru/image/single/most_oblaka_minimalizm_125968_3840x2160.jpg\"
                                    alt=\"Изображение\" loading=\"lazy\">
                            </picture>
                        </figure>
                    </a></div>
                <div class=\"col-md-4 col-sm-6 col-12 my-1\"><a
                        class=\"gallery-link\"
                        href=\"https://images.wallpaperscraft.ru/image/single/zdanie_okna_arhitektura_204778_3840x2160.jpg\">
                        <figure class=\"gallery-image\">
                            <picture>
                                <source srcset=\"\" type=\"image/webp\">
                                <img src=\"https://images.wallpaperscraft.ru/image/single/zdanie_okna_arhitektura_204778_3840x2160.jpg\"
                                    alt=\"Изображение\" loading=\"lazy\">
                            </picture>
                        </figure>
                    </a></div>
            </div>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/constructor/gallery/block--gallery_2.html.twig";
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
        return new Source("", "themes/LPC/templates/constructor/gallery/block--gallery_2.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\constructor\\gallery\\block--gallery_2.html.twig");
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
