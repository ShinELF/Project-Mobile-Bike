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

/* home/presentationEcologie.twig */
class __TwigTemplate_30613722bcbc23fd48006270311b461e extends Template
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
        yield "        <section class=\"mainSection\">
            <section class=\"texte\">
                <h2>L'alternative parfaite à la voiture</h2>
                <p>Une empreinte carbone presque nulle. <br>Une vraie alternative à la voiture <br>Un vrai bénéfice pour la
                    santé. 
                </p>
                <br>
                
                <a href=\"http://\" class=\"btnreadMore\">En savoir plus</a>
            </section>

            <p class=\"co2Text\">CO2</p>
            <p class=\"printText\">Empreinte carbone</p>
            <p class=\"healthText\">Santé</p>

            <!-- separation of the image for an easier css organisation -->
            <section class=\"imgBike\">
                <img src=\"./../../../Ressources/veloecologie.jpg\" alt=\"\">
            </section>          
        </section>

        <section class=\"subSection\">
            <h3>\"Chaque coup de pédale est un pas vers un avenir plus vert.\"</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolorum commodi repudiandae in doloribus, nostrum reprehenderit ut natus. Accusantium reiciendis, provident blanditiis mollitia suscipit ipsum! Eligendi praesentium nihil commodi consequatur.
            Animi officiis debitis voluptatibus, vitae similique possimus libero, quos officia voluptas beatae minus modi sed facere? Quas eveniet laboriosam velit numquam laudantium neque tempora dolorum culpa repellendus ea, similique iste!</p>
        </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/presentationEcologie.twig";
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
        <section class=\"mainSection\">
            <section class=\"texte\">
                <h2>L'alternative parfaite à la voiture</h2>
                <p>Une empreinte carbone presque nulle. <br>Une vraie alternative à la voiture <br>Un vrai bénéfice pour la
                    santé. 
                </p>
                <br>
                
                <a href=\"http://\" class=\"btnreadMore\">En savoir plus</a>
            </section>

            <p class=\"co2Text\">CO2</p>
            <p class=\"printText\">Empreinte carbone</p>
            <p class=\"healthText\">Santé</p>

            <!-- separation of the image for an easier css organisation -->
            <section class=\"imgBike\">
                <img src=\"./../../../Ressources/veloecologie.jpg\" alt=\"\">
            </section>          
        </section>

        <section class=\"subSection\">
            <h3>\"Chaque coup de pédale est un pas vers un avenir plus vert.\"</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dolorum commodi repudiandae in doloribus, nostrum reprehenderit ut natus. Accusantium reiciendis, provident blanditiis mollitia suscipit ipsum! Eligendi praesentium nihil commodi consequatur.
            Animi officiis debitis voluptatibus, vitae similique possimus libero, quos officia voluptas beatae minus modi sed facere? Quas eveniet laboriosam velit numquam laudantium neque tempora dolorum culpa repellendus ea, similique iste!</p>
        </section>
{% endblock %}", "home/presentationEcologie.twig", "/home/alcess/dev/formation/diginamic/Vélomobile/Project-Mobile-Bike/src/Views/home/presentationEcologie.twig");
    }
}
