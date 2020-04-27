<?php

/* not_found.html */
class __TwigTemplate_415b64124c8f175a2e521160c1f1f346bdd386bfd9dff8685a2925ad65ff3de2 extends Twig_Template
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
