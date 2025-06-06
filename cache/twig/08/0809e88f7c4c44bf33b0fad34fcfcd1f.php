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

/* home/boutique.twig */
class __TwigTemplate_84138b73a7b11d94cfe354e0564bd74b extends Template
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
        yield "<section>
            <ul>
                <li>Filtre</li>
                <li>Accessoires</li>
                <li>Moteur</li>
                <li>Prix</li>
            </ul>
        </section>

        <section>
            <section>
                <p>100 Article(s)</p>
                <p>trier par : Popularité </p>

            </section>
            <section>
                <article>
                    <a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9S.png\" alt=\"\">
                        <h3>
                            ALPHA W9S
                        </h3>
                        <p>
                            A partir de 13,255.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK7.png\" alt=\"\">
                        <h3>
                            MILAN GT MK7

                        </h3>
                        <p>
                            A partir de 11,629.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 7.png\" alt=\"\">
                        <h3>
                            ALPHA 7
                        </h3>
                        <p>
                            A partir de 11,846.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK 4 MORE.png\" alt=\"\">
                        <h3>
                            BÜLK 4 MORE
                        </h3>
                        <p>
                            A partir de 6,970.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK MK1.png\" alt=\"\">
                        <h3>
                            BÜLK MK1
                        </h3>
                        <p>
                            A partir de 10,596.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK URBAN.png\" alt=\"\">
                        <h3>
                            BÜLK URBAN
                        </h3>
                        <p>
                            A partir de 10,596.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9.png\" alt=\"\">
                        <h3>
                            ALPHA W9
                        </h3>
                        <p>
                            A partir de 12,933.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA M9.png\" alt=\"\">
                        <h3>
                            ALPHA M9
                        </h3>
                        <p>
                            A partir de 12,933.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 9.2.png\" alt=\"\">
                        <h3>
                            ALPHA 9.2
                        </h3>
                        <p>
                            A partir de 12,933.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK8.png\" alt=\"\">
                        <h3>
                            MILAN GT MK8
                        </h3>
                        <p>
                            A partir de 11,629.00 € (TVA compris)
                        </p>
                    </a>
                </article>
            </section>
        </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/boutique.twig";
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
<section>
            <ul>
                <li>Filtre</li>
                <li>Accessoires</li>
                <li>Moteur</li>
                <li>Prix</li>
            </ul>
        </section>

        <section>
            <section>
                <p>100 Article(s)</p>
                <p>trier par : Popularité </p>

            </section>
            <section>
                <article>
                    <a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9S.png\" alt=\"\">
                        <h3>
                            ALPHA W9S
                        </h3>
                        <p>
                            A partir de 13,255.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK7.png\" alt=\"\">
                        <h3>
                            MILAN GT MK7

                        </h3>
                        <p>
                            A partir de 11,629.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 7.png\" alt=\"\">
                        <h3>
                            ALPHA 7
                        </h3>
                        <p>
                            A partir de 11,846.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK 4 MORE.png\" alt=\"\">
                        <h3>
                            BÜLK 4 MORE
                        </h3>
                        <p>
                            A partir de 6,970.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK MK1.png\" alt=\"\">
                        <h3>
                            BÜLK MK1
                        </h3>
                        <p>
                            A partir de 10,596.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/BULK URBAN.png\" alt=\"\">
                        <h3>
                            BÜLK URBAN
                        </h3>
                        <p>
                            A partir de 10,596.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA W9.png\" alt=\"\">
                        <h3>
                            ALPHA W9
                        </h3>
                        <p>
                            A partir de 12,933.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA M9.png\" alt=\"\">
                        <h3>
                            ALPHA M9
                        </h3>
                        <p>
                            A partir de 12,933.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/ALPHA 9.2.png\" alt=\"\">
                        <h3>
                            ALPHA 9.2
                        </h3>
                        <p>
                            A partir de 12,933.00 € (TVA compris)
                        </p>
                    </a>
                </article>
                <article><a href=\"\"><img src=\"./../../../Ressources/assets/img/MILAN GT MK8.png\" alt=\"\">
                        <h3>
                            MILAN GT MK8
                        </h3>
                        <p>
                            A partir de 11,629.00 € (TVA compris)
                        </p>
                    </a>
                </article>
            </section>
        </section>
{% endblock %}", "home/boutique.twig", "/home/thang/Documents/diginamic/TP/Project-Mobile-Bike/src/Views/home/boutique.twig");
    }
}
