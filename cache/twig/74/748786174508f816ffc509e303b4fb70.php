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

/* home/evenement.twig */
class __TwigTemplate_266ae5cc1c323bbf20c4b43fe1cc13bc extends Template
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
\t<script type=\"module\" src=\"./evenement.js\"></script>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<section class=\"haute\">
\t\t<section class=\"hauteChild\">
\t\t\t<h2>Salon \"Le Vélorizon</h2>
\t\t\t<p>Venez découvrir et essayer nos vélomobiles lors de nos salons Vélorizons.  Nous organisons dix salons par an, aux quatres coins de la France pour vous permettre de découvrir notre univers.  Des passionnés se rassemblent lors de ces salons et n'hésiteront pas à partager leurs expériences avec eux.</p>
\t\t</section>

\t\t<section class=\"hauteChild\">
\t\t\t<img class=\"hauteImage\" src=\"Ressources/evenement.jpg\" alt=\"plusieurs vélos mobiles sur une pelouse\">
\t\t</section>
\t</section>

\t<section class=\"basse\">
\t\t<section>
\t\t\t<img class=\"basseImage\" src=\"Ressources/france.png\" alt=\"image de la France\">
            <img class=\"test1\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test2\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test3\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test4\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test5\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test6\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test7\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test8\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test9\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test10\" src=\"Ressources/roueVelo.png\" alt=\"\">

\t\t</section>

    ";
        // line 38
        yield "
\t\t<section class=\"basseReservation\">
\t\t\t<p>Selectionnez la ville de votre choix</p>
\t\t</section>

\t\t
\t</section>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/evenement.twig";
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
        return array (  91 => 38,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}

\t<script type=\"module\" src=\"./evenement.js\"></script>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<section class=\"haute\">
\t\t<section class=\"hauteChild\">
\t\t\t<h2>Salon \"Le Vélorizon</h2>
\t\t\t<p>Venez découvrir et essayer nos vélomobiles lors de nos salons Vélorizons.  Nous organisons dix salons par an, aux quatres coins de la France pour vous permettre de découvrir notre univers.  Des passionnés se rassemblent lors de ces salons et n'hésiteront pas à partager leurs expériences avec eux.</p>
\t\t</section>

\t\t<section class=\"hauteChild\">
\t\t\t<img class=\"hauteImage\" src=\"Ressources/evenement.jpg\" alt=\"plusieurs vélos mobiles sur une pelouse\">
\t\t</section>
\t</section>

\t<section class=\"basse\">
\t\t<section>
\t\t\t<img class=\"basseImage\" src=\"Ressources/france.png\" alt=\"image de la France\">
            <img class=\"test1\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test2\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test3\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test4\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test5\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test6\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test7\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test8\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test9\" src=\"Ressources/roueVelo.png\" alt=\"\">
            <img class=\"test10\" src=\"Ressources/roueVelo.png\" alt=\"\">

\t\t</section>

    {# <section class=\"icone\">
\t\t\t<img class=\"iconeImage\" src=\"Ressources/roueVelo.png\" alt=\"\">
\t\t</section> #}

\t\t<section class=\"basseReservation\">
\t\t\t<p>Selectionnez la ville de votre choix</p>
\t\t</section>

\t\t
\t</section>


{% endblock %}
", "home/evenement.twig", "/home/alcess/dev/diginamic/Vélomobile/Project-Mobile-Bike/src/Views/home/evenement.twig");
    }
}
