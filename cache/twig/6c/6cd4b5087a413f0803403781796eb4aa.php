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

/* home/presentationProduits.twig */
class __TwigTemplate_fd23fdb42c91511e37be3abe4b420b30 extends Template
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
    <h1>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "modele", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1>
    
    <section class=\"velomobile-details\">
    <article>
        <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 9), "html", null, true);
        yield "\" alt=\"\">
            <h2>Prix : ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 10), "html", null, true);
        yield " €</h2>
        </article>
        <article class=\"description\">
            <h2>Description</h2>
            <p>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
        </article>
    
    </section>
    
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/presentationProduits.twig";
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
        return array (  79 => 14,  72 => 10,  68 => 9,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}

{% block content %}

    <h1>{{ product.modele }}</h1>
    
    <section class=\"velomobile-details\">
    <article>
        <img src=\"{{ product.image }}\" alt=\"\">
            <h2>Prix : {{ product.price }} €</h2>
        </article>
        <article class=\"description\">
            <h2>Description</h2>
            <p>{{ product.description }}</p>
        </article>
    
    </section>
    
{% endblock %}", "home/presentationProduits.twig", "/home/alcess/dev/diginamic/Vélomobile/Project-Mobile-Bike/src/Views/home/presentationProduits.twig");
    }
}
