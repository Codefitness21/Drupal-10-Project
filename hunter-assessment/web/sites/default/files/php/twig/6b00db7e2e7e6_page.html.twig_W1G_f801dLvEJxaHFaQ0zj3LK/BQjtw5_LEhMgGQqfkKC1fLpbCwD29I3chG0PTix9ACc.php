<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig */
class __TwigTemplate_6125d6ba1b8f492affe934de0158bce8 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "<div class=\"layout-container\">

  ";
        // line 47
        if (( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 47)))) ||  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["page"] ?? null), "header", [], "any", false, false, true, 48)))))) {
            // line 49
            yield "    <header class=\"layout-header\" role=\"banner\">
      <div class=\"container\">
        ";
            // line 51
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 51))))) {
                // line 52
                yield "          ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 52), "html", null, true);
                yield "
        ";
            }
            // line 54
            yield "        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54))))) {
                // line 55
                yield "          ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 55), "html", null, true);
                yield "
        ";
            }
            // line 57
            yield "      </div>
    </header>
  ";
        }
        // line 60
        yield "
  ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "    <div class=\"layout-highlighted\">
      <div class=\"container\">
        ";
            // line 64
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 64), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 68
        yield "
  ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "  <div class=\"layout-tabs\">
    <div class=\"container\">
      ";
            // line 72
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 72), "html", null, true);
            yield "
    </div>
  </div>
  ";
        }
        // line 76
        yield "
  ";
        // line 77
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 77))))) {
            // line 78
            yield "    <div class=\"layout-banner-top\">
      ";
            // line 79
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 79), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 82
        yield "
  ";
        // line 83
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 83))))) {
            // line 84
            yield "  <div class=\"layout-breadcrumbs\">
    <div class=\"container\">
      ";
            // line 86
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 86), "html", null, true);
            yield "
    </div>
  </div>
  ";
        }
        // line 90
        yield "
  ";
        // line 91
        if ( !(($tmp = ($context["node"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 92))))) {
                // line 93
                yield "      <div class=\"layout-page-title\">
        ";
                // line 94
                if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "          <div class=\"is-front container\">
            ";
                    // line 96
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 96), "html", null, true);
                    yield "
          </div>
          ";
                } else {
                    // line 99
                    yield "          <div class=\"container\">
            ";
                    // line 100
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 100), "html", null, true);
                    yield "
          </div>
        ";
                }
                // line 103
                yield "      </div>
    ";
            }
            // line 105
            yield "  ";
        }
        // line 106
        yield "
  <main role=\"main\" class=\"main container\">

    <div class=\"layout-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 111
        yield "      ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), "html", null, true);
        yield "
    </div>";
        // line 113
        yield "
    ";
        // line 114
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 114))))) {
            // line 115
            yield "      <aside class=\"layout-sidebar\" role=\"complementary\">
        ";
            // line 116
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 116), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 119
        yield "
  </main>

  ";
        // line 122
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 122))))) {
            // line 123
            yield "    <div class=\"layout-content-bottom\">
      ";
            // line 124
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 124), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 127
        yield "
  ";
        // line 128
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 128))))) {
            // line 129
            yield "  <div class=\"layout-footer\">
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 132
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 132), "html", null, true);
            yield "
      </div>
    </footer>
  </div>
  ";
        }
        // line 137
        yield "
  ";
        // line 138
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 138))))) {
            // line 139
            yield "    <div class=\"layout-bottom\">
      <div class=\"container\">
        ";
            // line 141
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom", [], "any", false, false, true, 141), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 145
        yield "
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "node", "is_front"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  253 => 145,  246 => 141,  242 => 139,  240 => 138,  237 => 137,  229 => 132,  224 => 129,  222 => 128,  219 => 127,  213 => 124,  210 => 123,  208 => 122,  203 => 119,  197 => 116,  194 => 115,  192 => 114,  189 => 113,  184 => 111,  178 => 106,  175 => 105,  171 => 103,  165 => 100,  162 => 99,  156 => 96,  153 => 95,  151 => 94,  148 => 93,  145 => 92,  143 => 91,  140 => 90,  133 => 86,  129 => 84,  127 => 83,  124 => 82,  118 => 79,  115 => 78,  113 => 77,  110 => 76,  103 => 72,  99 => 70,  97 => 69,  94 => 68,  87 => 64,  83 => 62,  81 => 61,  78 => 60,  73 => 57,  67 => 55,  64 => 54,  58 => 52,  56 => 51,  52 => 49,  50 => 48,  49 => 47,  45 => 45,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 47];
        static $filters = ["trim" => 47, "render" => 47, "escape" => 52];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "trim", 1 => "render", 2 => "escape"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
