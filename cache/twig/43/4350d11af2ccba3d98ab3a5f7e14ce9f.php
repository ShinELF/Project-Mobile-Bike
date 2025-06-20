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

/* base.twig */
class __TwigTemplate_83eaed8aac3e0603e2f52d57db98f2e1 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</title>
\t\t<link rel=\"stylesheet\" href=\"/src/assets/css/main.css\">

\t\t<script src=\"../../js/base.js\" defer ></script>
\t\t<script src=\"../../js/presentationPersonnalisation.js\" defer ></script>
\t\t<script src=\"../../js/entretien.js\" defer ></script>


\t</head>

\t<body>
\t\t";
        // line 17
        yield from         $this->load("layout.twig", 17)->unwrap()->yieldBlock("header", $context);
        yield "
\t\t";
        // line 18
        yield from         $this->load("layout.twig", 18)->unwrap()->yieldBlock("newsletter", $context);
        yield "
\t\t<main>
\t\t\t";
        // line 20
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 21
        yield "\t\t</main>
\t\t";
        // line 22
        yield from         $this->load("layout.twig", 22)->unwrap()->yieldBlock("footer", $context);
        yield "</body>
</html>
";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.twig";
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
        return array (  86 => 20,  78 => 22,  75 => 21,  73 => 20,  68 => 18,  64 => 17,  50 => 6,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>{{ title }}</title>
\t\t<link rel=\"stylesheet\" href=\"/src/assets/css/main.css\">

\t\t<script src=\"../../js/base.js\" defer ></script>
\t\t<script src=\"../../js/presentationPersonnalisation.js\" defer ></script>
\t\t<script src=\"../../js/entretien.js\" defer ></script>


\t</head>

\t<body>
\t\t{{ block(\"header\", \"layout.twig\")}}
\t\t{{block(\"newsletter\", \"layout.twig\")}}
\t\t<main>
\t\t\t{% block content %}{% endblock %}
\t\t</main>
\t\t{{block(\"footer\", \"layout.twig\")}}</body>
</html>
", "base.twig", "C:\\Users\\Alice\\Documents\\01_Diginamic\\Exercices\\PROJET\\Projet-Mobile-Bike\\src\\Views\\base.twig");
    }
}
