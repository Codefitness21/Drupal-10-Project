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

/* @help_topics/language.detect.html.twig */
class __TwigTemplate_566a83d1b2f85e2a2a499e7710153825 extends Template
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
        // line 7
        $context["detection_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Detection and selection", array());
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["detection_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["detection_text"] ?? null), "language.negotiation"));
        // line 9
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Configure the methods used to decide which language will be used to display text on your site.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("What is a language detection method?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("A language detection method is a way for your site to decide what language should be used to display text. This decision is made by evaluating a series of detection methods for languages; the first detection method that gets a result will determine which language is used. If you have more than one language on your site, you can configure the detection methods that are used and the order they are evaluated, for both user interface text and content text. Configuration text always uses the interface text method, and most sites use the same detection methods for all types of text.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("What language detection methods are available?", array());
        yield "</h2>
<p>";
        // line 14
        yield t("The available detection methods depend on what modules you have installed. Some of the most commonly-used language detection methods are:", array());
        yield "</p>
<dl>
  <dt>";
        // line 16
        yield t("URL", array());
        yield "</dt>
  <dd>";
        // line 17
        yield t("Use the language from the URL, which can either be in a path prefix like <em>example.com/fr/page_path</em> for French (fr) language, or in a domain like <em>fr.example.com/page_path</em>.", array());
        yield "</dd>
  <dt>";
        // line 18
        yield t("User", array());
        yield "</dt>
  <dd>";
        // line 19
        yield t("For logged in users, use the language they have set in their profiles.", array());
        yield "</dd>
  <dt>";
        // line 20
        yield t("Browser", array());
        yield "</dt>
  <dd>";
        // line 21
        yield t("Use the language preferences from the user\x27s browser.", array());
        yield "</dd>
  <dt>";
        // line 22
        yield t("Selected language", array());
        yield "</dt>
  <dd>";
        // line 23
        yield t("Use the language most recently selected from a <em>Language switcher</em> block.", array());
        yield "</dd>
  <dt>";
        // line 24
        yield t("Session", array());
        yield "</dt>
  <dd>";
        // line 25
        yield t("Use the language from a session parameter or a request parameter; for example, adding <em>?language=fr</em> to the end of the URL.", array());
        yield "</dd>
</dl>
<h2>";
        // line 27
        yield t("Steps", array());
        yield "</h2>
<ol>
    <li>";
        // line 29
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>Languages</em> &gt; @detection_link.", array("@detection_link" => ($context["detection_link"] ?? null), ));
        yield "</li>
    <li>";
        // line 30
        yield t("Check the boxes to enable the desired language detection methods, and uncheck boxes for the methods you do not want to use.", array());
        yield "</li>
    <li>";
        // line 31
        yield t("Drag the methods to change their order, if desired.", array());
        yield "</li>
    <li>";
        // line 32
        yield t("Click <em>Save settings</em>.", array());
        yield "</li>
    <li>";
        // line 33
        yield t("Click <em>Configure</em> on each enabled detection method and verify that its configuration is correct (or update the configuration if not).", array());
        yield "</li>
</ol>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/language.detect.html.twig";
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
        return array (  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  119 => 27,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  52 => 9,  50 => 8,  45 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/language.detect.html.twig", "/var/www/html/web/core/modules/language/help_topics/language.detect.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 7, "trans" => 7];
        static $filters = ["escape" => 29];
        static $functions = ["render_var" => 8, "help_route_link" => 8];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
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
