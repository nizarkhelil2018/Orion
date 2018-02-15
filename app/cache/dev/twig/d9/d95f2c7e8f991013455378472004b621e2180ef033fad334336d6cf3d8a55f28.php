<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0b5dac55d15af0d33d3275789089e56d072928df16afb6bd4e84d3c17c2619f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b04518fbe40439916dfe9a3c7532041e4f47d723e4e8f07b31e6206e7894d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b04518fbe40439916dfe9a3c7532041e4f47d723e4e8f07b31e6206e7894d5->enter($__internal_b1b04518fbe40439916dfe9a3c7532041e4f47d723e4e8f07b31e6206e7894d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b1b04518fbe40439916dfe9a3c7532041e4f47d723e4e8f07b31e6206e7894d5->leave($__internal_b1b04518fbe40439916dfe9a3c7532041e4f47d723e4e8f07b31e6206e7894d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
