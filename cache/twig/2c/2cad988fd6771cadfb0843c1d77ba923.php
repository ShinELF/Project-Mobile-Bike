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

/* home/inscription.twig */
class __TwigTemplate_e7334a90d78189e417e304f3e6efce5e extends Template
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
        yield "\t<section class=\"login\">

\t\t<h1>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>

\t\t<form method=\"post\" action=\"/users/add'\">
\t\t\t<div class=\"creationForm\">
\t\t\t\t<label id=\"loginLabel\" for=\"login\">Votre login</label>
\t\t\t\t<input type=\"text\" id=\"login\" name=\"login\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"password\" id=\"passwordLabel\">Votre mot de passe</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"email\" id=\"emailLabel\">Votre email</label>
\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"name\" id=\"nameLabel\">Votre nom</label>
\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"surname\" id=\"surnameLabel\">Votre prénom</label>
\t\t\t\t<input type=\"text\" id=\"surname\" name=\"surname\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"phone\" id=\"phoneLabel\">Votre téléphone</label>
\t\t\t\t<input type=\"tel\" id=\"phone\" name=\"phone\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"adress\" id=\"adressLabel\">Votre adresse</label>
\t\t\t\t<input type=\"text\" id=\"adress\" name=\"adress\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"zipcode\" id=\"zipcodeLabel\">Votre code postal</label>
\t\t\t\t<input type=\"text\" id=\"zipcode\" name=\"zipcode\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"city\" id=\"cityLabel\">Votre ville</label>
\t\t\t\t<input type=\"text\" id=\"city\" name=\"city\" required>
\t\t\t</div>



\t\t\t<div class=\"creationForm\">
\t\t\t\t<button type=\"submit\" id=\"btnForm\">Inscription</button>
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
        return "home/inscription.twig";
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
        return array (  62 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
\t<section class=\"login\">

\t\t<h1>{{ title }}</h1>

\t\t<form method=\"post\" action=\"/users/add'\">
\t\t\t<div class=\"creationForm\">
\t\t\t\t<label id=\"loginLabel\" for=\"login\">Votre login</label>
\t\t\t\t<input type=\"text\" id=\"login\" name=\"login\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"password\" id=\"passwordLabel\">Votre mot de passe</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"email\" id=\"emailLabel\">Votre email</label>
\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"name\" id=\"nameLabel\">Votre nom</label>
\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"surname\" id=\"surnameLabel\">Votre prénom</label>
\t\t\t\t<input type=\"text\" id=\"surname\" name=\"surname\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"phone\" id=\"phoneLabel\">Votre téléphone</label>
\t\t\t\t<input type=\"tel\" id=\"phone\" name=\"phone\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"adress\" id=\"adressLabel\">Votre adresse</label>
\t\t\t\t<input type=\"text\" id=\"adress\" name=\"adress\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"zipcode\" id=\"zipcodeLabel\">Votre code postal</label>
\t\t\t\t<input type=\"text\" id=\"zipcode\" name=\"zipcode\" required>
\t\t\t</div>

\t\t\t<div class=\"creationForm\">
\t\t\t\t<label for=\"city\" id=\"cityLabel\">Votre ville</label>
\t\t\t\t<input type=\"text\" id=\"city\" name=\"city\" required>
\t\t\t</div>



\t\t\t<div class=\"creationForm\">
\t\t\t\t<button type=\"submit\" id=\"btnForm\">Inscription</button>
\t\t\t</div>
\t\t</form>

\t</section>
{% endblock %}
", "home/inscription.twig", "/home/thang/Documents/diginamic/TP/Project-Mobile-Bike/src/Views/home/inscription.twig");
    }
}
