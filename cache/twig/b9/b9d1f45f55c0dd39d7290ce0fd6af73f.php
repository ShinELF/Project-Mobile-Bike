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

/* home/entretien.twig */
class __TwigTemplate_042a5ebebf9045fb9855666bc516eef9 extends Template
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
        yield "    <section class=\"entretien\">
        <article>
            <h3>Article 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
            <iframe width=\"300\" height=\"150\" src=\"https://www.youtube.com/embed/OkSKb6o7_1E\" title=\"L’Atelier Vélo, un atelier mobile pour entretenir votre vélo partout\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
        </article>

        <article>
            <h3>Article 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
            <iframe width=\"300\" height=\"150\" src=\"https://www.youtube.com/embed/PMSpfW9_GwQ\" title=\"Maintenance d&#39;un Vélomobile Quest 🔧\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
        </article>

        <article>
            <h3>Article 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>

        <article>
            <h3>Article 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>

        <article>
            <h3>Article 5</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>

        <article>
            <h3>Article 6</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
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
        return "home/entretien.twig";
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
    <section class=\"entretien\">
        <article>
            <h3>Article 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
            <iframe width=\"300\" height=\"150\" src=\"https://www.youtube.com/embed/OkSKb6o7_1E\" title=\"L’Atelier Vélo, un atelier mobile pour entretenir votre vélo partout\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
        </article>

        <article>
            <h3>Article 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
            <iframe width=\"300\" height=\"150\" src=\"https://www.youtube.com/embed/PMSpfW9_GwQ\" title=\"Maintenance d&#39;un Vélomobile Quest 🔧\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
        </article>

        <article>
            <h3>Article 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>

        <article>
            <h3>Article 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>

        <article>
            <h3>Article 5</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>

        <article>
            <h3>Article 6</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea labore voluptatem numquam distinctio quia nam ab enim, natus quos, debitis mollitia laudantium obcaecati cumque nihil sequi ex minima consectetur sed? Maiores ipsum obcaecati doloribus iste iusto! Facilis sapiente cumque facere.</p>
        </article>
    </section>

{% endblock %}", "home/entretien.twig", "C:\\Users\\Alice\\Documents\\01_Diginamic\\Exercices\\PROJET\\Projet-Mobile-Bike\\src\\Views\\home\\entretien.twig");
    }
}
