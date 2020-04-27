<?php

/* list.appointments.html */
class __TwigTemplate_0a1a514b1ea9f9766f2daafc74114437659d45ae98777df208c3fb7418ade0d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "list.appointments.html", 1);
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
        echo "List Appointments";
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
        echo "        <section id=\"appointments\">
            <h1>Turnos</h1>";
        // line 18
        if (($context["appointments"] ?? null)) {
            // line 19
            echo "                <table border=\"1\">
                    <thead>
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\">Hora</th>
                        <th scope=\"col\">Nombre del paciente</th>
                        <th scope=\"col\">Teléfono</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>";
        } else {
            // line 32
            echo "                    <span>There is no registered appointments at the moment.</span>";
        }
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 37
            echo "                    <tbody>
                        <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "fecha_turno", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "hora_turno", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "telefono", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                <form method=\"get\" id=\"show-appointment-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"view_appointment\">
                                    <input type=\"hidden\" name=\"id\" value=";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                                    <button type=\"submit\" form=\"show-appointment-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">View</button>
                                </form>
                                <form method=\"get\" id=\"edit-appointment-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"edit_appointment\">
                                    <input type=\"hidden\" name=\"id\" value=";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                                    <button type=\"submit\" form=\"edit-appointment-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Edit</button>
                                </form>
                                <form method=\"get\" id=\"destroy-appointment-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"del_appointment\" onSubmit=\"return confirm('Desea eliminar el turno?');\">
                                    <input type=\"hidden\" name=\"id\" value=";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                                    <button type=\"submit\" form=\"destroy-appointment-";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </section>";
    }

    public function getTemplateName()
    {
        return "list.appointments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  151 => 56,  147 => 55,  143 => 54,  138 => 52,  134 => 51,  130 => 50,  125 => 48,  121 => 47,  117 => 46,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 37,  84 => 36,  81 => 32,  67 => 19,  65 => 18,  62 => 16,  59 => 15,  53 => 11,  50 => 10,  46 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}List Appointments{% endblock %}

{% block header %}
{{ include('validation_errors.html') }}
{{ include('nav.views.html') }}
{% endblock %}

{% block head %}
{{ parent() }}
<meta name=\"keywords\" content=\"PAW,2020,Templates,PHP\">
{% endblock %}

{% block main %}
        <section id=\"appointments\">
            <h1>Turnos</h1>
            {% if appointments %}
                <table border=\"1\">
                    <thead>
                    <tr>
                        <th scope=\"col\">ID</th>
                        <th scope=\"col\">Fecha</th>
                        <th scope=\"col\">Hora</th>
                        <th scope=\"col\">Nombre del paciente</th>
                        <th scope=\"col\">Teléfono</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                    </thead>
                    {% else %}
                    <span>There is no registered appointments at the moment.</span>
                    {% endif %}


                {% for appointment in appointments %}
                    <tbody>
                        <tr>
                            <td>{{ appointment.id }}</td>
                            <td>{{ appointment.fecha_turno }}</td>
                            <td>{{ appointment.hora_turno }}</td>
                            <td>{{ appointment.nombre }}</td>
                            <td>{{ appointment.telefono }}</td>
                            <td>{{ appointment.email }}</td>
                            <td>
                                <form method=\"get\" id=\"show-appointment-{{ appointment.id }}\" action=\"view_appointment\">
                                    <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                                    <button type=\"submit\" form=\"show-appointment-{{ appointment.id }}\">View</button>
                                </form>
                                <form method=\"get\" id=\"edit-appointment-{{ appointment.id }}\" action=\"edit_appointment\">
                                    <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                                    <button type=\"submit\" form=\"edit-appointment-{{ appointment.id }}\">Edit</button>
                                </form>
                                <form method=\"get\" id=\"destroy-appointment-{{ appointment.id }}\" action=\"del_appointment\" onSubmit=\"return confirm('Desea eliminar el turno?');\">
                                    <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                                    <button type=\"submit\" form=\"destroy-appointment-{{ appointment.id }}\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            {% endfor %}

        </section>
{% endblock %}", "list.appointments.html", "C:\\wamp64\\www\\trabajos\\trabajo3-paw\\app\\views\\list.appointments.html");
    }
}
