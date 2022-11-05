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

/* themes/LPC/templates/constructor/text-block/block--text_block_1.html.twig */
class __TwigTemplate_2f03966113c9e954a5e634967b15769fd45e59e4fb4baf20f1a027e6b92e0dd8 extends \Twig\Template
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
        $context["classes"] = [0 => "block", 1 => "carousel-item", 2 => "active"];
        // line 8
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo ">
  <section class=\"text\">
      <div class=\"container-xl\">
          <h2 class=\"title-1 mb-4\">Случайный текст похож на треск разлетающихся скреп</h2>
          <p>В своём стремлении улучшить пользовательский опыт мы упускаем, что непосредственные участники технического прогресса набирают популярность среди определенных слоев населения, а значит, должны быть в равной степени предоставлены сами себе. Но ключевые особенности структуры проекта могут быть призваны к ответу. Внезапно, предприниматели в сети интернет неоднозначны и будут подвергнуты целой серии независимых исследований.</p>
      </div>
  </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/LPC/templates/constructor/text-block/block--text_block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/LPC/templates/constructor/text-block/block--text_block_1.html.twig", "D:\\OpenServer\\domains\\landing-constructor-dev-v2\\themes\\LPC\\templates\\constructor\\text-block\\block--text_block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("escape" => 8);
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
