<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bf7f52a26c20dfa66557e8aade929c7c3f36140fffebf576e47f5014e59ef727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a2d0aba7cfabdfcd002b0eef4de0628c4138e327bdd60c6149322d444b9f58a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d0aba7cfabdfcd002b0eef4de0628c4138e327bdd60c6149322d444b9f58a3->enter($__internal_a2d0aba7cfabdfcd002b0eef4de0628c4138e327bdd60c6149322d444b9f58a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d0aba7cfabdfcd002b0eef4de0628c4138e327bdd60c6149322d444b9f58a3->leave($__internal_a2d0aba7cfabdfcd002b0eef4de0628c4138e327bdd60c6149322d444b9f58a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae4e0cfbf22ce4233e2c41e7462981b069bec6887d3603498679810d72dfbf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4e0cfbf22ce4233e2c41e7462981b069bec6887d3603498679810d72dfbf40->enter($__internal_ae4e0cfbf22ce4233e2c41e7462981b069bec6887d3603498679810d72dfbf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae4e0cfbf22ce4233e2c41e7462981b069bec6887d3603498679810d72dfbf40->leave($__internal_ae4e0cfbf22ce4233e2c41e7462981b069bec6887d3603498679810d72dfbf40_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_916f1128bf5c7f6e8fe361c146b5c894b172e978f5514a6a7444adda7517f0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916f1128bf5c7f6e8fe361c146b5c894b172e978f5514a6a7444adda7517f0ed->enter($__internal_916f1128bf5c7f6e8fe361c146b5c894b172e978f5514a6a7444adda7517f0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_916f1128bf5c7f6e8fe361c146b5c894b172e978f5514a6a7444adda7517f0ed->leave($__internal_916f1128bf5c7f6e8fe361c146b5c894b172e978f5514a6a7444adda7517f0ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a829ed2f3c46b84110368b9398c2d74813eb1feb37896c5cdc32ab9b895a763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a829ed2f3c46b84110368b9398c2d74813eb1feb37896c5cdc32ab9b895a763->enter($__internal_9a829ed2f3c46b84110368b9398c2d74813eb1feb37896c5cdc32ab9b895a763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a829ed2f3c46b84110368b9398c2d74813eb1feb37896c5cdc32ab9b895a763->leave($__internal_9a829ed2f3c46b84110368b9398c2d74813eb1feb37896c5cdc32ab9b895a763_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
