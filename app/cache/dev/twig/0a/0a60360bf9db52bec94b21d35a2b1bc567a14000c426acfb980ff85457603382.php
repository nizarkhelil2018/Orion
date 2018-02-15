<?php

/* OrionEventBundle:Evenement2:edit.html.twig */
class __TwigTemplate_f21dc6b12763b62b408cc1237efb215a1cd9f48b6c273b9845f5d2b1e87ab6a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OrionEventBundle:Evenement2:edit.html.twig", 1);
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
        $__internal_30a2582d7dbc0943361cf4706d2d881440926c25b9ba1d38b074c4c71a935053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a2582d7dbc0943361cf4706d2d881440926c25b9ba1d38b074c4c71a935053->enter($__internal_30a2582d7dbc0943361cf4706d2d881440926c25b9ba1d38b074c4c71a935053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Evenement2:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a2582d7dbc0943361cf4706d2d881440926c25b9ba1d38b074c4c71a935053->leave($__internal_30a2582d7dbc0943361cf4706d2d881440926c25b9ba1d38b074c4c71a935053_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64bb4cf213104a2c98d5965a2c7bbe5eaf2b584ff72510495dc8df7215dbbd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bb4cf213104a2c98d5965a2c7bbe5eaf2b584ff72510495dc8df7215dbbd15->enter($__internal_64bb4cf213104a2c98d5965a2c7bbe5eaf2b584ff72510495dc8df7215dbbd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_64bb4cf213104a2c98d5965a2c7bbe5eaf2b584ff72510495dc8df7215dbbd15->leave($__internal_64bb4cf213104a2c98d5965a2c7bbe5eaf2b584ff72510495dc8df7215dbbd15_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Evenement2:edit.html.twig";
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
", "OrionEventBundle:Evenement2:edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Evenement2/edit.html.twig");
    }
}
