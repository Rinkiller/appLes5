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

/* header.tpl */
class __TwigTemplate_9250eff3e7c45143a2a308d39db357fb extends Template
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
        echo "<div class=\"menu_bar container\">
                <div class=\"menu_hreff line_bar\">
                    <a href=\"#\" class=\"line_1\">Home</a>
                    <a href=\"#\" class=\"line_2\">About Us</a>
                    <a href=\"#\" class=\"line_2\">Services</a>
                    <a href=\"#\" class=\"line_2\">Features</a>
                    <a href=\"#\" class=\"line_2\">Team</a>
                    <a href=\"#\" class=\"line_2\">Blog</a>
                    <a href=\"#\" class=\"line_2\">Contact</a>
                    <p class=\"line_2\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo "</p>
                </div>  
            </div>";
    }

    public function getTemplateName()
    {
        return "header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.tpl", "/data/mysite.local/src/Views/header.tpl");
    }
}
