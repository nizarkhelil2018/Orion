<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fb9e19d607aff1ec6c8376552e42e375feaae877b8d66f7d53952c55b7e43faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28fe1c9265f77efc9ddc6e11c5ce9c5087b2a203bff910ef5b3090642f8f8743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fe1c9265f77efc9ddc6e11c5ce9c5087b2a203bff910ef5b3090642f8f8743->enter($__internal_28fe1c9265f77efc9ddc6e11c5ce9c5087b2a203bff910ef5b3090642f8f8743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28fe1c9265f77efc9ddc6e11c5ce9c5087b2a203bff910ef5b3090642f8f8743->leave($__internal_28fe1c9265f77efc9ddc6e11c5ce9c5087b2a203bff910ef5b3090642f8f8743_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bf08a29b84ea23bc6ef05c4629f571d3af3151f670f7b41602874f3027bae94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf08a29b84ea23bc6ef05c4629f571d3af3151f670f7b41602874f3027bae94->enter($__internal_4bf08a29b84ea23bc6ef05c4629f571d3af3151f670f7b41602874f3027bae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4bf08a29b84ea23bc6ef05c4629f571d3af3151f670f7b41602874f3027bae94->leave($__internal_4bf08a29b84ea23bc6ef05c4629f571d3af3151f670f7b41602874f3027bae94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fc99277596df71066a4206cb38e746a16fea0a2e929aca4808c48e39e90c175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc99277596df71066a4206cb38e746a16fea0a2e929aca4808c48e39e90c175->enter($__internal_8fc99277596df71066a4206cb38e746a16fea0a2e929aca4808c48e39e90c175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fc99277596df71066a4206cb38e746a16fea0a2e929aca4808c48e39e90c175->leave($__internal_8fc99277596df71066a4206cb38e746a16fea0a2e929aca4808c48e39e90c175_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89216b735e84fa23cf16bba0d8e0d0e960ceeaefb1d21c2dd48345e8980147c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89216b735e84fa23cf16bba0d8e0d0e960ceeaefb1d21c2dd48345e8980147c5->enter($__internal_89216b735e84fa23cf16bba0d8e0d0e960ceeaefb1d21c2dd48345e8980147c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89216b735e84fa23cf16bba0d8e0d0e960ceeaefb1d21c2dd48345e8980147c5->leave($__internal_89216b735e84fa23cf16bba0d8e0d0e960ceeaefb1d21c2dd48345e8980147c5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
