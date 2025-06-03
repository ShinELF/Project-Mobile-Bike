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

/* login/formLogin.twig */
class __TwigTemplate_a11769ac1662a5d7347bdbcabf537716 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t<section>

\t\t<h2>
\t\t\t";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>

\t\t<form method=\"post\" action=\"/login-post\">
\t\t\t<div id=\"inputForm\">
\t\t\t\t<label id=\"loginLabel\" for=\"login\">Votre login</label>
\t\t\t\t<input type=\"text\" id=\"login\" name=\"login\" required>
\t\t\t</div>

\t\t\t<div id=\"inputForm\">
\t\t\t\t<label for=\"password\" id=\"passwordLabel\">Votre mot de passe</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" required>
\t\t\t</div>

\t\t\t<div id=\"inputForm\">
\t\t\t\t<button type=\"submit\" id=\"btnForm\">Connexion</button>
\t\t\t</div>
\t\t</form>

\t</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/formLogin.twig";
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
        return array (  63 => 7,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
\t<section>

\t\t<h2>
\t\t\t{{ title }}</h2>

\t\t<form method=\"post\" action=\"/login-post\">
\t\t\t<div id=\"inputForm\">
\t\t\t\t<label id=\"loginLabel\" for=\"login\">Votre login</label>
\t\t\t\t<input type=\"text\" id=\"login\" name=\"login\" required>
\t\t\t</div>

\t\t\t<div id=\"inputForm\">
\t\t\t\t<label for=\"password\" id=\"passwordLabel\">Votre mot de passe</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" required>
\t\t\t</div>

\t\t\t<div id=\"inputForm\">
\t\t\t\t<button type=\"submit\" id=\"btnForm\">Connexion</button>
\t\t\t</div>
\t\t</form>

\t</section>
{% endblock %}
", "login/formLogin.twig", "/home/thang/Documents/diginamic/TP/Project-Mobile-Bike/src/Views/login/formLogin.twig");
    }
}
