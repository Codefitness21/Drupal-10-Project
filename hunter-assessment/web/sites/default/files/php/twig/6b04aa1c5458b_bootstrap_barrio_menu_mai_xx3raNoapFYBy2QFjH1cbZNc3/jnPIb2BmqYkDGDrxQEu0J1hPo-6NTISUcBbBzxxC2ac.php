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

/* bootstrap_barrio:menu_main */
class __TwigTemplate_796f982a1d567b44a23ddf4d13ea0cf5 extends Template
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
        // line 1
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.bootstrap_barrio--menu_main"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "bootstrap_barrio:menu_main"));
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "bootstrap_barrio:menu_main"));
        $macros["menus"] = $this->macros["menus"] = $this->getMacroNamespace();
        // line 2
        yield "
";
        // line 7
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(7))->call("menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], $context, 7, $this->source));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_links" => new \Twig\TwigMacro("menu_links", function ($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup {
                // line 9
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 10
                    yield "  ";
                    $macros["menus"] = $this->getMacroNamespace();
                    // line 11
                    yield "  ";
                    if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 12
                        yield "    ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 13
                            yield "      <ul";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["nav navbar-nav"], "method", false, false, true, 13), "id"), "html", null, true);
                            yield ">
    ";
                        } else {
                            // line 15
                            yield "      <ul class=\"dropdown-menu\">
    ";
                        }
                        // line 17
                        yield "    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 18
                            yield "      ";
                            // line 19
                            $context["classes"] = [(((($tmp =                             // line 20
($context["menu_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-item") : ("nav-item")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 21
$context["item"], "is_expanded", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--expanded") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 22
$context["item"], "is_collapsed", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("menu-item--collapsed") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 23
$context["item"], "in_active_trail", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 24
$context["item"], "below", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown") : (""))];
                            // line 27
                            yield "      <li";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 27), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
                            yield ">
        ";
                            // line 29
                            $context["link_classes"] = [(( !(($tmp =                             // line 30
($context["menu_level"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("nav-link") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 31
$context["item"], "in_active_trail", [], "any", false, false, true, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 32
$context["item"], "below", [], "any", false, false, true, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-toggle") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 33
$context["item"], "url", [], "any", false, false, true, 33), "getOption", ["attributes"], "method", false, false, true, 33), "class", [], "any", false, false, true, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33), "getOption", ["attributes"], "method", false, false, true, 33), "class", [], "any", false, false, true, 33), " ")) : ("")), ("nav-link-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 34
$context["item"], "url", [], "any", false, false, true, 34), "toString", [], "method", false, false, true, 34)))];
                            // line 37
                            yield "        ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 38
                                yield "          ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 38), ["class" => ($context["link_classes"] ?? null), "data-bs-toggle" => "dropdown", "aria-expanded" => "false", "aria-haspopup" => "true"]), "html", null, true);
                                yield "
          ";
                                // line 39
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(39))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], $context, 39, $this->source));
                                yield "
        ";
                            } else {
                                // line 41
                                yield "          ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 41), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                                yield "
        ";
                            }
                            // line 43
                            yield "      </li>
    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 45
                        yield "    </ul>
  ";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "attributes" => false, "menu_level" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_barrio:menu_main";
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
        return array (  150 => 45,  142 => 43,  136 => 41,  131 => 39,  126 => 38,  123 => 37,  121 => 34,  120 => 33,  119 => 32,  118 => 31,  117 => 30,  116 => 29,  111 => 27,  109 => 24,  108 => 23,  107 => 22,  106 => 21,  105 => 20,  104 => 19,  102 => 18,  97 => 17,  93 => 15,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  66 => 9,  53 => 7,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_barrio:menu_main", "themes/contrib/bootstrap_barrio/components/menu_main/menu_main.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1, "macro" => 9, "if" => 11, "for" => 17, "set" => 19];
        static $filters = ["escape" => 13, "without" => 13, "join" => 33, "clean_class" => 34];
        static $functions = ["link" => 38];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "macro", 2 => "if", 3 => "for", 4 => "set"],
                [0 => "escape", 1 => "without", 2 => "join", 3 => "clean_class"],
                [0 => "link"],
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
