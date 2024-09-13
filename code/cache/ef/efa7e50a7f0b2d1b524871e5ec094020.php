<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main.tpl */
class __TwigTemplate_247c9c4e490c3bc96f40c9d312814378 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"http://mysite.local/Static/style.css\">
    </head>
    <body>
        ";
        // line 13
        $this->loadTemplate(($context["header_template_name"] ?? null), "main.tpl", 13)->display($context);
        // line 14
        echo "        ";
        $this->loadTemplate(($context["content_template_name"] ?? null), "main.tpl", 14)->display($context);
        // line 15
        echo "        ";
        $this->loadTemplate(($context["futer_template_name"] ?? null), "main.tpl", 15)->display($context);
        // line 16
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  56 => 14,  54 => 13,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.tpl", "/data/mysite.local/src/Views/main.tpl");
    }
}
