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

/* themes/contrib/bootstrap_barrio/templates/views/views-view-table.html.twig */
class __TwigTemplate_1a4c8dd3191947503b70f2096d5e3df9 extends Template
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
        // line 34
        $context["classes"] = ["table", (((($tmp =         // line 36
($context["hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("table-hover") : ("")),         // line 37
($context["table_class"] ?? null), "views-table", "views-view-table", ("cols-" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 40
($context["header"] ?? null))), (((($tmp =         // line 41
($context["responsive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("responsive-enabled") : ("")), (((($tmp =         // line 42
($context["sticky"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("sticky-enabled") : (""))];
        // line 45
        yield "<div class=\"table-responsive col\">
<table";
        // line 46
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 46), "html", null, true);
        yield ">
  ";
        // line 47
        if ((($tmp = ($context["caption_needed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "    <caption>
    ";
            // line 49
            if ((($tmp = ($context["caption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "      ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true);
                yield "
    ";
            } else {
                // line 52
                yield "      ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "
    ";
            }
            // line 54
            yield "    ";
            if (((!Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))))) {
                // line 55
                yield "      <details>
        ";
                // line 56
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["summary"] ?? null))) {
                    // line 57
                    yield "          <summary>";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true);
                    yield "</summary>
        ";
                }
                // line 59
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
                    // line 60
                    yield "          ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
                    yield "
        ";
                }
                // line 62
                yield "      </details>
    ";
            }
            // line 64
            yield "    </caption>
  ";
        }
        // line 66
        yield "  ";
        if ((($tmp = ($context["header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "    <thead class=\x27";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["thead_class"] ?? null), "html", null, true);
            yield "\x27>
      <tr>
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 70
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 71
                    yield "            ";
                    // line 72
                    $context["column_classes"] = ["views-field", ("views-field-" . (($_v0 =                     // line 74
($context["fields"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = $context["key"]) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["key"], [], "array", false, false, true, 74)))];
                    // line 77
                    yield "          ";
                }
                // line 78
                yield "          <th";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 78), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 78), "setAttribute", ["scope", "col"], "method", false, false, true, 78), "html", null, true);
                yield ">";
                // line 79
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "<";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 80), "html", null, true);
                    yield ">";
                    // line 81
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 82
                        yield "<a href=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 82), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 82), "html", null, true);
                        yield "\">";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 82), "html", null, true);
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 82), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 84
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 84), "html", null, true);
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 84), "html", null, true);
                    }
                    // line 86
                    yield "</";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 86), "html", null, true);
                    yield ">";
                } else {
                    // line 88
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 89
                        yield "<a href=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 89), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 89), "html", null, true);
                        yield "\">";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 89), "html", null, true);
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 89), "html", null, true);
                        yield "</a>";
                    } else {
                        // line 91
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 91), "html", null, true);
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 91), "html", null, true);
                    }
                }
                // line 94
                yield "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 96
            yield "      </tr>
    </thead>
  ";
        }
        // line 99
        yield "  <tbody>
    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 101
            yield "      <tr";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 101), "html", null, true);
            yield ">
        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 102));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 103
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 104
                    yield "            ";
                    // line 105
                    $context["column_classes"] = ["views-field"];
                    // line 109
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 110
                        yield "              ";
                        $context["column_classes"] = Twig\Extension\CoreExtension::merge(($context["column_classes"] ?? null), [("views-field-" . $context["field"])]);
                        // line 111
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 112
                    yield "          ";
                }
                // line 113
                yield "          <td";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 113), "addClass", [($context["column_classes"] ?? null)], "method", false, false, true, 113), "html", null, true);
                yield ">";
                // line 114
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "<";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 115), "html", null, true);
                    yield ">
              ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 116));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 117
                        yield "                ";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 117), "html", null, true);
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 117), "html", null, true);
                        yield "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 119
                    yield "              </";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 119), "html", null, true);
                    yield ">";
                } else {
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 121));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 122
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 122), "html", null, true);
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 122), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                }
                // line 125
                yield "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['column'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 127
            yield "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 129
        yield "  </tbody>
</table>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["hover", "table_class", "header", "responsive", "sticky", "attributes", "caption_needed", "caption", "title", "summary", "description", "thead_class", "fields", "rows"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap_barrio/templates/views/views-view-table.html.twig";
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
        return array (  295 => 129,  287 => 127,  279 => 125,  270 => 122,  266 => 121,  261 => 119,  250 => 117,  246 => 116,  241 => 115,  239 => 114,  235 => 113,  232 => 112,  225 => 111,  222 => 110,  217 => 109,  215 => 105,  213 => 104,  210 => 103,  206 => 102,  201 => 101,  197 => 100,  194 => 99,  189 => 96,  181 => 94,  176 => 91,  166 => 89,  164 => 88,  159 => 86,  155 => 84,  145 => 82,  143 => 81,  139 => 80,  137 => 79,  133 => 78,  130 => 77,  128 => 74,  127 => 72,  125 => 71,  122 => 70,  118 => 69,  112 => 67,  109 => 66,  105 => 64,  101 => 62,  95 => 60,  92 => 59,  86 => 57,  84 => 56,  81 => 55,  78 => 54,  72 => 52,  66 => 50,  64 => 49,  61 => 48,  59 => 47,  55 => 46,  52 => 45,  50 => 42,  49 => 41,  48 => 40,  47 => 37,  46 => 36,  45 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/views/views-view-table.html.twig", "/var/www/html/web/themes/contrib/bootstrap_barrio/templates/views/views-view-table.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 47, "for" => 69];
        static $filters = ["length" => 40, "escape" => 46, "merge" => 110];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
                [0 => "length", 1 => "escape", 2 => "merge"],
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
