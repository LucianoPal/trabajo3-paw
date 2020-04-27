<?php

/* nav.views.html */
class __TwigTemplate_6e4420bd0a520c0f3c3d676a5c1c9c4a50b8ba163a7869031219ada3b52a497b extends Twig_Template
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
        echo "<nav>
    <ul>
        <li> <a href=\"/\">Inicio</a> </li>
        <li> <a href=\"/new_appointment\">Solicitar turno</a> </li>
        <li> <a href=\"/list_appointments\">Listar turnos</a> </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.views.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
    <ul>
        <li> <a href=\"/\">Inicio</a> </li>
        <li> <a href=\"/new_appointment\">Solicitar turno</a> </li>
        <li> <a href=\"/list_appointments\">Listar turnos</a> </li>
    </ul>
</nav>", "nav.views.html", "C:\\wamp64\\www\\trabajos\\trabajo3-paw\\app\\views\\nav.views.html");
    }
}
