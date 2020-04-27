<?php

/* new.appointment.html */
class __TwigTemplate_fb35da9291616cb04be385b5372cca6c328ebe53f8b14bc767e530821b3278b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "new.appointment.html", 1);
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
        echo "New Appointment";
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
        echo "    <form class=\"new\" action=\"/save_appointment\" method=\"post\" enctype=\"multipart/form-data\">
        <label><b>Nombre:</b> (*)</label><br>
        <input type=\"text\" name=\"nombre\" required>
        <label><b>Email:</b> (*)</label><br>
        <input type=\"email\" name=\"email\" required>
        <label><b>Telefono:</b> (*)</label><br>
        <input type=\"tel\" name=\"telefono\" required>
        <label>Edad:</label><br>
        <input type=\"text\" name=\"edad\" maxlength=\"2\" max=\"99\">
        <label>Talla de calzado:</label><br>
        <input type=\"text\" name=\"talla_calzado\" maxlength=\"2\">
        <label>Altura:</label><br>
        <input type=\"range\" name=\"altura\" min=\"100\" max=\"200\" step=\"10\" value=\"150\" list=\"tickmarks\">
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
        <input type=\"date\" name=\"fecha_nacimiento\" required>
        <label>Color de pelo:</label><br>
        <select name=\"color_pelo\">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
        </select>
        <label><b>Fecha de turno:</b> (*)</label><br>
        <input type=\"date\" name=\"fecha_turno\" required>
        <label><b>Horiario de turno(hh:min):</b> (*)</label><br>
        <input type=\"time\" min=\"08:00\" max=\"17:00\" step=\"900\" name=\"horario_turno\" required>
        <label>Diagnostico</label><br>
        <input type=\"file\" name=\"diagnostico\" accept=\"image/jpeg, image/x-png, image/x-jpg\">
        <input type=\"submit\" value=\"Enviar\" />
        <input type=\"reset\" value=\"Limpiar\"  />
    </form>
    <p> Los campos marcados como (*) son obligatorios </p>";
    }

    public function getTemplateName()
    {
        return "new.appointment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  53 => 11,  50 => 10,  46 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}New Appointment{% endblock %}

{% block header %}
{{ include('validation_errors.html') }}
{{ include('nav.views.html') }}
{% endblock %}

{% block head %}
{{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">
{% endblock %}

{% block main %}
    <form class=\"new\" action=\"/save_appointment\" method=\"post\" enctype=\"multipart/form-data\">
        <label><b>Nombre:</b> (*)</label><br>
        <input type=\"text\" name=\"nombre\" required>
        <label><b>Email:</b> (*)</label><br>
        <input type=\"email\" name=\"email\" required>
        <label><b>Telefono:</b> (*)</label><br>
        <input type=\"tel\" name=\"telefono\" required>
        <label>Edad:</label><br>
        <input type=\"text\" name=\"edad\" maxlength=\"2\" max=\"99\">
        <label>Talla de calzado:</label><br>
        <input type=\"text\" name=\"talla_calzado\" maxlength=\"2\">
        <label>Altura:</label><br>
        <input type=\"range\" name=\"altura\" min=\"100\" max=\"200\" step=\"10\" value=\"150\" list=\"tickmarks\">
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
        <input type=\"date\" name=\"fecha_nacimiento\" required>
        <label>Color de pelo:</label><br>
        <select name=\"color_pelo\">
            <option>morocho</option>
            <option>rubio</option>
            <option>colorado</option>
            <option>castanio</option>
        </select>
        <label><b>Fecha de turno:</b> (*)</label><br>
        <input type=\"date\" name=\"fecha_turno\" required>
        <label><b>Horiario de turno(hh:min):</b> (*)</label><br>
        <input type=\"time\" min=\"08:00\" max=\"17:00\" step=\"900\" name=\"horario_turno\" required>
        <label>Diagnostico</label><br>
        <input type=\"file\" name=\"diagnostico\" accept=\"image/jpeg, image/x-png, image/x-jpg\">
        <input type=\"submit\" value=\"Enviar\" />
        <input type=\"reset\" value=\"Limpiar\"  />
    </form>
    <p> Los campos marcados como (*) son obligatorios </p>
{% endblock %}", "new.appointment.html", "C:\\wamp64\\www\\trabajos\\trabajo3-paw\\app\\views\\new.appointment.html");
    }
}
