<?php

/* not_found.html */
class __TwigTemplate_46021972a392dc07d60dcc62516e5defa8e6c209b3ef7f4799d274c6cceb7d97 extends Twig_Template
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
        echo "<h1>404 - Not Found</h1>
";
    }

    public function getTemplateName()
    {
        return "not_found.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>404 - Not Found</h1>
", "not_found.html", "C:\\wamp64\\www\\trabajos\\trabajo3-paw\\app\\views\\not_found.html");
    }
}
