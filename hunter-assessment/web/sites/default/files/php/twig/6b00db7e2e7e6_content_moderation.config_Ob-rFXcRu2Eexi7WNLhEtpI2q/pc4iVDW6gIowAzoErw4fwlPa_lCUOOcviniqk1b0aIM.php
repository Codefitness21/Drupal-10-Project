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

/* @help_topics/content_moderation.configuring_workflows.html.twig */
class __TwigTemplate_d266157a103e37fe4a65724c18f084ed extends Template
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
        // line 9
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 10
        $context["user_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("user.overview"));
        // line 11
        $context["user_permissions_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("user.permissions"));
        // line 12
        $context["workflows_overview_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("workflows.overview"));
        // line 13
        $context["content_moderation_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Content Moderation", array());
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        $context["content_moderation_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["content_moderation_permissions_link_text"] ?? null), "user.admin_permissions", [], ["fragment" => "module-content_moderation"]));
        // line 15
        $context["workflows_permissions_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Administer workflows", array());
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        $context["workflows_permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["workflows_permissions_link_text"] ?? null), "user.admin_permissions", [], ["fragment" => "module-workflows"]));
        // line 17
        $context["workflows_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Workflows", array());
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        $context["workflows_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["workflows_link_text"] ?? null), "entity.workflow.collection"));
        // line 19
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 20
        yield t("Create or edit a workflow with various workflow states (for example <em>Concept</em>, <em>Archived</em>, etc.) for moderating content. See @workflows_overview_topic for more information on workflows.", array("@workflows_overview_topic" => ($context["workflows_overview_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 21
        yield t("Who can configure a workflow?", array());
        yield "</h2>
<p>";
        // line 22
        yield t("Users with <em>workflows permissions</em> (typically administrators) can configure workflows. See Permissions &gt; <em>@workflows_permissions_link</em> to configure workflows permissions.", array("@workflows_permissions_link" => ($context["workflows_permissions_link"] ?? null), ));
        yield "</p>
<h2>";
        // line 23
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 25
        yield t("Make a plan for the new workflow:", array());
        // line 26
        yield "    <ul>
      <li>";
        // line 27
        yield t("Decide which workflow states you need; for example, <em>Concept</em>, <em>Review</em>, and <em>Final</em>.", array());
        yield "</li>
      <li>";
        // line 28
        yield t("Decide on the settings for each state:", array());
        // line 29
        yield "        <ul>
          <li>";
        // line 30
        yield t("<em>Label</em>: the state name", array());
        yield "</li>
          <li>";
        // line 31
        yield t("<em>Published</em>: if checked, when content reaches this state it will be made visible on the site (to users with permission).", array());
        yield "</li>
          <li>";
        // line 32
        yield t("<em>Default revision</em>: if checked, when content reaches this state it will become the default revision of the content; published content is automatically the default revision.", array());
        yield "</li>
        </ul>
      </li>
      <li>";
        // line 35
        yield t("Decide which state content should be created in.", array());
        yield "</li>
      <li>";
        // line 36
        yield t("Decide on the list of allowed transitions between states. For example, you might want a transition between <em>Concept</em> and <em>Review</em>. Each transition has a label; for example, the Concept to Review transition might be labeled \"Review concept\".", array());
        yield "</li>
      <li>";
        // line 37
        yield t("Decide which roles should have permissions to make each transition; see @user_overview_topic for an overview of roles and permissions.", array("@user_overview_topic" => ($context["user_overview_topic"] ?? null), ));
        yield "</li>
      <li>";
        // line 38
        yield t("Decide which <em>entity types</em> and subtypes the workflow should apply to. Only entity types that support revisions are possible to define workflows for. See @content_structure_topic for more information on content entities and fields.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</li>
    </ul>
  </li>
  <li>";
        // line 41
        yield t("To implement your plan, in the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Workflow</em> &gt; <em>@workflows_link</em>. A list of workflows is shown, including the default workflow <em>Editorial</em> that you can adapt.", array("@workflows_link" => ($context["workflows_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 42
        yield t("Click <em>Add workflow</em>.", array());
        yield "</li>
  <li>";
        // line 43
        yield t("Enter a name in the <em>Label</em> field, select <em>Content moderation</em> from the <em>Workflow type</em> field, and click <em>Save</em>.", array());
        yield "</li>
  <li>";
        // line 44
        yield t("Verify that the <em>States</em> list matches your planned states. You can add missing states by clicking <em>Add a new state</em>. You can edit or delete states by clicking <em>Edit</em> or <em>Delete</em> under <em>Operations</em> (if the <em>Delete</em> option is not available, you will first need to delete any <em>Transitions</em> to or from this state).", array());
        yield "</li>
  <li>";
        // line 45
        yield t("Verify that the <em>Transitions</em> list matches your plan. You can add missing transitions by clicking <em>Add a new transition</em>. You can edit or delete transitions by clicking <em>Edit</em> or <em>Delete</em> under <em>Operations</em>.", array());
        yield "</li>
  <li>";
        // line 46
        yield t("Under <em>This workflow applies to:</em>, find the entity type that you want this workflow to apply to, such as Content revisions, Content block revisions, or Taxonomy term revisions. Click <em>Select</em>.", array());
        yield "</li>
  <li>";
        // line 47
        yield t("Check the entity subtypes that you want to apply the workflow to. For example, you might choose to apply your workflow to the <em>Page</em> content type, but not to <em>Article</em>.", array());
        yield "</li>
  <li>";
        // line 48
        yield t("Click <em>Save</em>.", array());
        yield "</li>
  <li>";
        // line 49
        yield t("Under <em>Workflow settings</em>, select the <em>Default moderation state</em> for new content.", array());
        yield "</li>
  <li>";
        // line 50
        yield t("Click <em>Save</em> to save your workflow.", array());
        yield "</li>
  <li>";
        // line 51
        yield t("Follow the steps in @user_permissions_topic to assign permissions for each transition to roles. The permissions are listed under the <em>@content_moderation_permissions_link</em> section; there is one permission for each transition in each workflow.", array("@user_permissions_topic" => ($context["user_permissions_topic"] ?? null), "@content_moderation_permissions_link" => ($context["content_moderation_permissions_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 52
        yield t("Optionally (recommended), create a view for your custom workflow, to provide a page for content editors to see what content needs to be moderated. You can do this if the Views UI module is installed, by following the steps in the related <em>Creating a new view</em> topic listed below under <em>Related topics</em>. When creating the view, under <em>View settings</em> &gt; <em>Show</em>, select the revision data type you configured the workflow for, and be sure to display the <em>Workflow State</em> field in your view.", array());
        yield "</li>
</ol>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/content_moderation.configuring_workflows.html.twig";
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
        return array (  186 => 52,  182 => 51,  178 => 50,  174 => 49,  170 => 48,  166 => 47,  162 => 46,  158 => 45,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  118 => 32,  114 => 31,  110 => 30,  107 => 29,  105 => 28,  101 => 27,  98 => 26,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  74 => 19,  72 => 18,  67 => 17,  65 => 16,  60 => 15,  58 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/content_moderation.configuring_workflows.html.twig", "/var/www/html/web/core/modules/content_moderation/help_topics/content_moderation.configuring_workflows.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "trans" => 13];
        static $filters = ["escape" => 20];
        static $functions = ["render_var" => 9, "help_topic_link" => 9, "help_route_link" => 14];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_topic_link", 2 => "help_route_link"],
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
