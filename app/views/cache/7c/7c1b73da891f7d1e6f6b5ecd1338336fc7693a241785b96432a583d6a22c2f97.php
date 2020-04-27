<?php

/* index.views.html */
class __TwigTemplate_cee2b0da01f39eb1af44bcc47f4007fd1dfab7e660db972ffb21e4f9639e8f59 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index.views.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
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

    public function getTemplateName()
    {
        return "index.views.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  49 => 10,  45 => 7,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
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
{% endblock %}", "index.views.html", "C:\\wamp64\\www\\trabajos\\trabajo3-paw\\app\\views\\index.views.html");
    }
}
