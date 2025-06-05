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

/* users/index.twig */
class __TwigTemplate_e303ca37e5c746c99decaf9c4981162c extends Template
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
        yield "

\t<h2 class=\"mb-4\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h2>

\t<h3>
\t\t<a class=\"btn btn-success my-3\" href=\"/users/add\">Ajouter un utilisateur</a>
\t</h3>
\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            yield "
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t\t\t\t<h3 class=\"card-title\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 18), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"/users/update/";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "\">Modifier</a>

\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"/users/delete/";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">Supprimer</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">ID :</span>
\t\t\t\t\t\t\t\t";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</li>

\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Password :</span>
\t\t\t\t\t\t\t\t";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 31), "html", null, true);
            yield "</li>

\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Email :</span>
\t\t\t\t\t\t\t\t";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</li>

\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Date de création :</span>
\t\t\t\t\t\t\t\t";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 39), "html", null, true);
            yield "</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "\t</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "users/index.twig";
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
        return array (  134 => 46,  121 => 39,  114 => 35,  107 => 31,  100 => 27,  91 => 21,  86 => 19,  82 => 18,  75 => 13,  71 => 12,  62 => 6,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}


\t<h2 class=\"mb-4\">{{ title }}</h2>

\t<h3>
\t\t<a class=\"btn btn-success my-3\" href=\"/users/add\">Ajouter un utilisateur</a>
\t</h3>
\t<div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
\t\t{% for user in users %}

\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t\t\t\t<h3 class=\"card-title\">{{ user.login}}</h3>
\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"/users/update/{{user.id}}\">Modifier</a>

\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"/users/delete/{{user.id}}\">Supprimer</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">ID :</span>
\t\t\t\t\t\t\t\t{{ user.id }}</li>

\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Password :</span>
\t\t\t\t\t\t\t\t{{ user.password}}</li>

\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Email :</span>
\t\t\t\t\t\t\t\t{{ user.email}}</li>

\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Date de création :</span>
\t\t\t\t\t\t\t\t{{ user.createdAt}}</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "users/index.twig", "C:\\Users\\Alice\\Documents\\01_Diginamic\\Exercices\\PROJET\\Projet-Mobile-Bike\\src\\Views\\users\\index.twig");
    }
}
