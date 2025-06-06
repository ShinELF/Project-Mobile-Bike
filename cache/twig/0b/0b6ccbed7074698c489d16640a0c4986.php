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

/* shop/index.twig */
class __TwigTemplate_6ad7fe0e062e722014684265512a9e4a extends Template
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
\t\t<ul>
\t\t\t<li>Filtre</li>
\t\t\t<li>Accessoires</li>
\t\t\t<li>Moteur</li>
\t\t\t<li>Prix</li>
\t\t</ul>
\t</section>

\t<section>
\t\t<section>
\t\t\t<p>100 Article(s)</p>
\t\t\t<p>trier par : Popularité
\t\t\t</p>

\t\t</section>
\t\t<section>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 22
            yield "\t\t\t\t<article>
\t\t\t\t\t<a href=\"\"><img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 23), "html", null, true);
            yield "\" alt=\"\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "modele", [], "any", false, false, false, 25), "html", null, true);
            yield "
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tA partir de
\t\t\t\t\t\t\t";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 29), "html", null, true);
            yield "
\t\t\t\t\t\t\t€ (TVA compris)
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t</article>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prod'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9S.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA W9S
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 13,255.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK7.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tMILAN GT MK7

\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 11,629.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 7.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA 7
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 11,846.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK 4 MORE.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tBÜLK 4 MORE
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 6,970.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK MK1.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tBÜLK MK1
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 10,596.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK URBAN.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tBÜLK URBAN
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 10,596.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA W9
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 12,933.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA M9.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA M9
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 12,933.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 9.2.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA 9.2
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 12,933.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK8.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tMILAN GT MK8
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 11,629.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t</section>
\t</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shop/index.twig";
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
        return array (  109 => 36,  96 => 29,  89 => 25,  84 => 23,  81 => 22,  77 => 21,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
\t<section>
\t\t<ul>
\t\t\t<li>Filtre</li>
\t\t\t<li>Accessoires</li>
\t\t\t<li>Moteur</li>
\t\t\t<li>Prix</li>
\t\t</ul>
\t</section>

\t<section>
\t\t<section>
\t\t\t<p>100 Article(s)</p>
\t\t\t<p>trier par : Popularité
\t\t\t</p>

\t\t</section>
\t\t<section>
\t\t\t{% for prod in product %}
\t\t\t\t<article>
\t\t\t\t\t<a href=\"\"><img src=\"{{prod.image}}\" alt=\"\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t{{prod.modele}}
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tA partir de
\t\t\t\t\t\t\t{{prod.price}}
\t\t\t\t\t\t\t€ (TVA compris)
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t</article>

\t\t\t{% endfor %}
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9S.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA W9S
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 13,255.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK7.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tMILAN GT MK7

\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 11,629.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 7.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA 7
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 11,846.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK 4 MORE.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tBÜLK 4 MORE
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 6,970.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK MK1.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tBÜLK MK1
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 10,596.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK URBAN.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tBÜLK URBAN
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 10,596.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA W9
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 12,933.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA M9.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA M9
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 12,933.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 9.2.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tALPHA 9.2
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 12,933.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t\t<article>
\t\t\t\t<a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK8.png\" alt=\"\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tMILAN GT MK8
\t\t\t\t\t</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\tA partir de 11,629.00 € (TVA compris)
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</article>
\t\t</section>
\t</section>
{% endblock %}
", "shop/index.twig", "C:\\Users\\Alice\\Documents\\01_Diginamic\\Exercices\\PROJET\\Projet-Mobile-Bike\\src\\Views\\shop\\index.twig");
    }
}
