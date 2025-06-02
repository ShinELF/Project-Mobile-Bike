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
class __TwigTemplate_820dd69cbd695631551945ed856a2a57 extends Template
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
        yield "\t<div class=\"container py-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<h2 class=\"card-title text-center mb-4\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>

\t\t\t\t\t\t<form method=\"post\" action=\"/login-post\">
\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" required>
\t\t\t\t\t\t\t\t<label for=\"login\">Votre login</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
\t\t\t\t\t\t\t\t<label for=\"password\">Votre mot de passe</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"d-grid gap-2 mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\">Connexion</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

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
        return array (  65 => 9,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
\t<div class=\"container py-5\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"card shadow\">
\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t<h2 class=\"card-title text-center mb-4\">{{ title }}</h2>

\t\t\t\t\t\t<form method=\"post\" action=\"/login-post\">
\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" required>
\t\t\t\t\t\t\t\t<label for=\"login\">Votre login</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
\t\t\t\t\t\t\t\t<label for=\"password\">Votre mot de passe</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"d-grid gap-2 mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg\">Connexion</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "login/formLogin.twig", "C:\\Users\\Alice\\Documents\\01_Diginamic\\Exercices\\PROJET\\Projet-Mobile-Bike\\src\\Views\\login\\formLogin.twig");
    }
}
