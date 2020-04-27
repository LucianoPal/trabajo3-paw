<?php

/* views.appointment.html */
class __TwigTemplate_c1d096cf5259a1772e8f51641dc15f8ba1711808b8070a26f0cdcece58e736a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "views.appointment.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo twig_include($this->env, $context, "validation_errors.html");
        // line 7
        echo twig_include($this->env, $context, "nav.views.html");
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <form class=\"view\">
        <label><b>Nombre:</b> (*)</label><br>
        <input type=\"text\" name=\"nombre\" readonly value=";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label><b>Email:</b> (*)</label><br>
        <input type=\"email\" name=\"email\" readonly value=";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label><b>Telefono:</b> (*)</label><br>
        <input type=\"tel\" name=\"telefono\" readonly value=";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label>Edad:</label><br>
        <input type=\"text\" name=\"edad\" readonly value=";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label>Talla de calzado:</label><br>
        <input type=\"text\" name=\"talla_calzado\" readonly value=";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label>Altura:</label><br>
        <input type=\"range\" name=\"altura\" readonly value=";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <datalist id=\"tickmarks\">
            <option value=\"100\" label=\"1mts\">
            <option value=\"110\">
            <option value=\"120\">
            <option value=\"130\">
            <option value=\"140\">
            <option value=\"150\" label=\"1,50\">
            <option value=\"160\">
            <option value=\"170\">
            <option value=\"180\">
            <option value=\"190\">
            <option value=\"200\" label=\"2mts\">
        </datalist>
        <label><b>Fecha de nacimiento:</b> (*)</label><br>
        <input type=\"date\" name=\"fecha_nacimiento\" readonly value=";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label>Color de pelo:</label><br>
        <select name=\"color_pelo\">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
        </select>
        <label><b>Fecha de turno:</b> (*)</label><br>
        <input type=\"date\" name=\"fecha_turno\" readonly value=";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        <label><b>Horiario de turno(hh:min):</b> (*)</label><br>
        <input type=\"time\" name=\"horario_turno\" readonly value=";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "image", array())) {
            // line 56
            echo "            <label>Diagnostico</label><br>
            <img  class=\"diagnostico\" src=\"data:image/png;base64,";
            // line 57
            echo twig_escape_filter($this->env, ($context["image_base_64"] ?? null), "html", null, true);
            echo "\" />";
        }
        // line 59
        echo "    </form>";
    }

    public function getTemplateName()
    {
        return "views.appointment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 59,  134 => 57,  131 => 56,  129 => 55,  126 => 54,  121 => 52,  109 => 43,  91 => 28,  86 => 26,  81 => 24,  76 => 22,  71 => 20,  66 => 18,  62 => 16,  59 => 15,  53 => 11,  50 => 10,  46 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Home{% endblock %}

{% block header %}
{{ include('validation_errors.html') }}
{{ include('nav.views.html') }}
{% endblock %}

{% block head %}
{{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">
{% endblock %}

{% block main %}
    <form class=\"view\">
        <label><b>Nombre:</b> (*)</label><br>
        <input type=\"text\" name=\"nombre\" readonly value={{ appointment.id }}>
        <label><b>Email:</b> (*)</label><br>
        <input type=\"email\" name=\"email\" readonly value={{ appointment.id }}>
        <label><b>Telefono:</b> (*)</label><br>
        <input type=\"tel\" name=\"telefono\" readonly value={{ appointment.id }}>
        <label>Edad:</label><br>
        <input type=\"text\" name=\"edad\" readonly value={{ appointment.id }}>
        <label>Talla de calzado:</label><br>
        <input type=\"text\" name=\"talla_calzado\" readonly value={{ appointment.id }}>
        <label>Altura:</label><br>
        <input type=\"range\" name=\"altura\" readonly value={{ appointment.id }}>
        <datalist id=\"tickmarks\">
            <option value=\"100\" label=\"1mts\">
            <option value=\"110\">
            <option value=\"120\">
            <option value=\"130\">
            <option value=\"140\">
            <option value=\"150\" label=\"1,50\">
            <option value=\"160\">
            <option value=\"170\">
            <option value=\"180\">
            <option value=\"190\">
            <option value=\"200\" label=\"2mts\">
        </datalist>
        <label><b>Fecha de nacimiento:</b> (*)</label><br>
        <input type=\"date\" name=\"fecha_nacimiento\" readonly value={{ appointment.id }}>
        <label>Color de pelo:</label><br>
        <select name=\"color_pelo\">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
        </select>
        <label><b>Fecha de turno:</b> (*)</label><br>
        <input type=\"date\" name=\"fecha_turno\" readonly value={{ appointment.id }}>
        <label><b>Horiario de turno(hh:min):</b> (*)</label><br>
        <input type=\"time\" name=\"horario_turno\" readonly value={{ appointment.id }}>
        {% if (appointment.image) %}
            <label>Diagnostico</label><br>
            <img  class=\"diagnostico\" src=\"data:image/png;base64,{{ image_base_64 }}\" />
        {% endif %}
    </form>
{% endblock %}", "views.appointment.html", "C:\\wamp64\\www\\trabajos\\trabajo3-paw\\app\\views\\views.appointment.html");
    }
}
