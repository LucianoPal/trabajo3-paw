<?php

/* internal_error.html */
class __TwigTemplate_fe0a6bcf419a44565abecbdd2b87cc180bec868f1edeb77f7e5bc728c4ef9efb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>500 - Internal Server Error</h1>
";
    }

    public function getTemplateName()
    {
        return "internal_error.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>500 - Internal Server Error</h1>
", "internal_error.html", "C:\\Users\\josee\\Desktop\\PROGRAMACION WEB\\repos\\TRABAJO3-PDO\\trabajo3-paw\\app\\views\\internal_error.html");
    }
}
