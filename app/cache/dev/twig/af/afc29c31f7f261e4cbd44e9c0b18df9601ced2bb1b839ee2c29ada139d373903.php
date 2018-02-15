<?php

/* OrionEventBundle:Evenement2:new.html.twig */
class __TwigTemplate_dafdb892225a96b3c9281e514d358a02f80a16405af5165cccd27393fb096422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OrionEventBundle:Evenement2:new.html.twig", 1);
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
        $__internal_53b9788994764e9566945d26c851847484411d0f90d495a656f45dfe5a0bb167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b9788994764e9566945d26c851847484411d0f90d495a656f45dfe5a0bb167->enter($__internal_53b9788994764e9566945d26c851847484411d0f90d495a656f45dfe5a0bb167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Evenement2:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b9788994764e9566945d26c851847484411d0f90d495a656f45dfe5a0bb167->leave($__internal_53b9788994764e9566945d26c851847484411d0f90d495a656f45dfe5a0bb167_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa21d1d090015ad9d5553df21471bba60bdb249642327f69fbec29fe5f43f3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa21d1d090015ad9d5553df21471bba60bdb249642327f69fbec29fe5f43f3e8->enter($__internal_aa21d1d090015ad9d5553df21471bba60bdb249642327f69fbec29fe5f43f3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Evenement creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_aa21d1d090015ad9d5553df21471bba60bdb249642327f69fbec29fe5f43f3e8->leave($__internal_aa21d1d090015ad9d5553df21471bba60bdb249642327f69fbec29fe5f43f3e8_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Evenement2:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Evenement creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('user_owned_events_all') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "OrionEventBundle:Evenement2:new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Evenement2/new.html.twig");
    }
}
