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

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig */
class __TwigTemplate_eb87c5956ed79a3a4a7d7a88e7285533 extends Template
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
        // line 8
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 10))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 11
($context["plugin_id"] ?? null)))];
        // line 14
        yield "
";
        // line 15
        yield from $this->load("core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig", 15, 2)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 16), "content" =>         // line 17
($context["content"] ?? null), "label" =>         // line 18
($context["label"] ?? null), "title_attributes" =>         // line 19
($context["title_attributes"] ?? null), "title_prefix" =>         // line 20
($context["title_prefix"] ?? null), "title_suffix" =>         // line 21
($context["title_suffix"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "attributes", "content", "label", "title_attributes", "title_prefix", "title_suffix"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig";
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
        return array (  58 => 21,  57 => 20,  56 => 19,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  49 => 14,  47 => 11,  46 => 10,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "embed" => 15];
        static $filters = ["clean_class" => 10];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "embed"],
                [0 => "clean_class"],
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


/* core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig */
class __TwigTemplate_eb87c5956ed79a3a4a7d7a88e7285533___2 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 15
        return $this->parent ??= $this->load("umami:footer-block", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("umami:footer-block", 15);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_attributes", "label", "content", "title_prefix", "title_suffix"]);    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->load("core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig", 24, 1)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
($context["title_attributes"] ?? null), "addClass", ["footer-block__title"], "method", false, false, true, 25), "label" => (((($tmp =         // line 26
($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["label"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 26))), "title_prefix" =>         // line 27
($context["title_prefix"] ?? null), "title_suffix" =>         // line 28
($context["title_suffix"] ?? null)]));
        // line 37
        yield "    ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig";
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
        return array (  190 => 37,  188 => 28,  187 => 27,  186 => 26,  185 => 25,  183 => 24,  176 => 23,  164 => 15,  58 => 21,  57 => 20,  56 => 19,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  49 => 14,  47 => 11,  46 => 10,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 15, "embed" => 24];
        static $filters = ["escape" => 37];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "extends", 1 => "embed"],
                [0 => "escape"],
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


/* core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig */
class __TwigTemplate_eb87c5956ed79a3a4a7d7a88e7285533___1 extends Template
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

        $this->blocks = [
            'title_prefix' => [$this, 'block_title_prefix'],
            'title_suffix' => [$this, 'block_title_suffix'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 24
        return $this->parent ??= $this->load("umami:title", 24);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("umami:title", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix"]);    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_prefix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "        ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
      ";
        return; yield;
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_suffix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "        ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
      ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig";
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
        return array (  333 => 34,  326 => 33,  318 => 31,  311 => 30,  299 => 24,  190 => 37,  188 => 28,  187 => 27,  186 => 26,  185 => 25,  183 => 24,  176 => 23,  164 => 15,  58 => 21,  57 => 20,  56 => 19,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  49 => 14,  47 => 11,  46 => 10,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/block--system-menu-block--footer.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 24];
        static $filters = ["escape" => 31];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "extends"],
                [0 => "escape"],
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
