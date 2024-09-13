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

/* futer.tpl */
class __TwigTemplate_50593701dbfc6f536a20b945773f5bf8 extends Template
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
        echo "<div class=\"Brand_line container\">
                <a href=\"#\" class=\"Brand_hreff1\"><img src=\"http://mysite.local/Static/1.png\" alt=\"\"></a>
                <a href=\"#\" class=\"Brand_hreff2\"><img src=\"http://mysite.local/Static/6.png\" alt=\"\"></a>
                <a href=\"#\" class=\"Brand_hreff3\"><img src=\"http://mysite.local/Static/3.png\" alt=\"\"></a>
                <a href=\"#\" class=\"Brand_hreff4\"><img src=\"http://mysite.local/Static/4.png\" alt=\"\"></a>
                <a href=\"#\" class=\"Brand_hreff5\"><img src=\"http://mysite.local/Static/5.png\" alt=\"\"></a>
                <a href=\"#\" class=\"Brand_hreff6\"><img src=\"http://mysite.local/Static/6.png\" alt=\"\"></a>
                
            </div>";
    }

    public function getTemplateName()
    {
        return "futer.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "futer.tpl", "/data/mysite.local/src/Views/futer.tpl");
    }
}
