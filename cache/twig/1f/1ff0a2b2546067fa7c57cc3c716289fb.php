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

/* home/index.twig */
class __TwigTemplate_01e9ff03d9751471fd8fd57b147e760f extends Template
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
        yield "\t<section class=\"intro\">
\t\t<article>
\t\t\t<h1>Mobile Bike</h1>
\t\t\t<p>
\t\t\t\tStructurellement le vélomobile est un tricycle couché caréné.<br>
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCe véhicule à pédales permet de se déplacer à l'abri du froid et de la pluie, il offre également un volume utile pour le transport de bagages.
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCe mode de déplacement est encore peu répandu en France, c'est seulement dans les années 2000 que le concept a été développé dans les \"pays du vélo\" : La Belgique, les Pays-Bas et l'Allemagne.
\t\t\t</p>
\t\t</article>
\t\t<article>
\t\t\t<img src=\"./../../../Ressources/Atelier.png\" width=\"400px\">
\t\t</article>
\t</section>

\t<section class=\"Avis\">
\t<article><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/54ZU4SMxhCc?si=GMzauJWiYxUeW-6c\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe></article>
\t<article>
\t\t<h1>Témoignages et avis clients</h1>
\t\t<p>
\t\t\t\"Le vélomobile m'a donné l'occasion de faire du sport là où je n'en n'aurais jamais fais avec d'autres moyens et je n'ai pas forcément le temps de faire du sport le reste de la semaine\".<br>
\t\t\tBenoît, 25 ans, Bretagne.
\t\t</p>
\t\t<p>
\t\t\t\"Ce vélomobile, développé dans l'optique de répondre aux besoins des \"vélotafeurs\", combine tout un tas d'avantages : confort, entretien quasi nul, protection face à la météo, vitesse... J'ai donc aujourd'hui le bonheur d'utiliser ce vélomobile pour l'ensemble de mes déplacements utilitaires, sans perdre de temps par rapport à l'utilisation d'une voiture, tout en faisant une activité physique et tout en oubliant le prix du litre de diesel !\".<br>
\t\t\tJean-Jacques, 42 ans, Haute-Normandie.
\t\t</p>
\t\t<p>
\t\t\t\"Le confort est vraiment super, même dans le froid et sous la pluie, grâce entre autre au toit amovible. Ca me fait vraiment beaucoup de bien cet entrainement régulier, c'est bon pour le cardio, ça maintient une bonne forme physique, et c'est très bon pour le moral, et le mental sans compter les économies essence, d'entretien de voiture, et c'est aussi meilleur pour la planète... Donc, que du Bonheur !\".<br>
\t\t\tStéphanie, 52 ans, Occitanie.
\t\t</p></article>
\t</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.twig";
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
        return array (  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
\t<section class=\"intro\">
\t\t<article>
\t\t\t<h1>Mobile Bike</h1>
\t\t\t<p>
\t\t\t\tStructurellement le vélomobile est un tricycle couché caréné.<br>
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCe véhicule à pédales permet de se déplacer à l'abri du froid et de la pluie, il offre également un volume utile pour le transport de bagages.
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCe mode de déplacement est encore peu répandu en France, c'est seulement dans les années 2000 que le concept a été développé dans les \"pays du vélo\" : La Belgique, les Pays-Bas et l'Allemagne.
\t\t\t</p>
\t\t</article>
\t\t<article>
\t\t\t<img src=\"./../../../Ressources/Atelier.png\" width=\"400px\">
\t\t</article>
\t</section>

\t<section class=\"Avis\">
\t<article><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/54ZU4SMxhCc?si=GMzauJWiYxUeW-6c\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe></article>
\t<article>
\t\t<h1>Témoignages et avis clients</h1>
\t\t<p>
\t\t\t\"Le vélomobile m'a donné l'occasion de faire du sport là où je n'en n'aurais jamais fais avec d'autres moyens et je n'ai pas forcément le temps de faire du sport le reste de la semaine\".<br>
\t\t\tBenoît, 25 ans, Bretagne.
\t\t</p>
\t\t<p>
\t\t\t\"Ce vélomobile, développé dans l'optique de répondre aux besoins des \"vélotafeurs\", combine tout un tas d'avantages : confort, entretien quasi nul, protection face à la météo, vitesse... J'ai donc aujourd'hui le bonheur d'utiliser ce vélomobile pour l'ensemble de mes déplacements utilitaires, sans perdre de temps par rapport à l'utilisation d'une voiture, tout en faisant une activité physique et tout en oubliant le prix du litre de diesel !\".<br>
\t\t\tJean-Jacques, 42 ans, Haute-Normandie.
\t\t</p>
\t\t<p>
\t\t\t\"Le confort est vraiment super, même dans le froid et sous la pluie, grâce entre autre au toit amovible. Ca me fait vraiment beaucoup de bien cet entrainement régulier, c'est bon pour le cardio, ça maintient une bonne forme physique, et c'est très bon pour le moral, et le mental sans compter les économies essence, d'entretien de voiture, et c'est aussi meilleur pour la planète... Donc, que du Bonheur !\".<br>
\t\t\tStéphanie, 52 ans, Occitanie.
\t\t</p></article>
\t</section>
{% endblock %}
", "home/index.twig", "/home/thang/Documents/diginamic/TP/Project-Mobile-Bike/src/Views/home/index.twig");
    }
}
