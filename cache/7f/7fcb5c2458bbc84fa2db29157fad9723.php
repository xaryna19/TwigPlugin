<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* index.html */
class __TwigTemplate_ed403f54f078f15c12cdea451f0570ae extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
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
        yield "<h1>Hello ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "!</h1>
-----------------------------
";
        // line 3
        if (array_key_exists("foo", $context)) {
            // line 4
            yield "    ...
";
        }
        // line 6
        yield "
";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["foo"] ?? null), "bar", [], "any", true, true, false, 7)) {
            // line 8
            yield "    ...
";
        }
        // line 10
        yield "
";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["foo"] ?? null), "bar", [], "array", true, true, false, 11)) {
            // line 12
            yield "    ...
";
        }
        // line 14
        yield "
";
        // line 15
        if ((array_key_exists("var", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["foo"] ?? null), "method", [($context["var"] ?? null)], "method", true, true, false, 15))) {
            // line 16
            yield "    ...
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html";
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
    public function getDebugInfo(): array
    {
        return array (  77 => 16,  75 => 15,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  59 => 8,  57 => 7,  54 => 6,  50 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html", "D:\\Administrator\\dev\\htdocs\\wwtp\\sandbox\\router\\twig\\templates\\index.html");
    }
}
