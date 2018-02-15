<?php

/* @OrionEvent/Evenement2/edit.html.twig */
class __TwigTemplate_6503ee5c22959ed27d0bc8603a6f91c4d944a6b978910f9720963e3d2035d53a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@OrionEvent/Evenement2/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_529064c07eb982cdef95b0fb3d685539a452fc1557379140f89c73fa09744ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529064c07eb982cdef95b0fb3d685539a452fc1557379140f89c73fa09744ea7->enter($__internal_529064c07eb982cdef95b0fb3d685539a452fc1557379140f89c73fa09744ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Evenement2/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529064c07eb982cdef95b0fb3d685539a452fc1557379140f89c73fa09744ea7->leave($__internal_529064c07eb982cdef95b0fb3d685539a452fc1557379140f89c73fa09744ea7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f637517ba7e8f4529fb0e5de7746eb68c7a6f061e082b6205d3a4741fc13b69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f637517ba7e8f4529fb0e5de7746eb68c7a6f061e082b6205d3a4741fc13b69f->enter($__internal_f637517ba7e8f4529fb0e5de7746eb68c7a6f061e082b6205d3a4741fc13b69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Evenement edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_f637517ba7e8f4529fb0e5de7746eb68c7a6f061e082b6205d3a4741fc13b69f->leave($__internal_f637517ba7e8f4529fb0e5de7746eb68c7a6f061e082b6205d3a4741fc13b69f_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Evenement2/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Evenement edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('evenement') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@OrionEvent/Evenement2/edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Evenement2\\edit.html.twig");
    }
}
