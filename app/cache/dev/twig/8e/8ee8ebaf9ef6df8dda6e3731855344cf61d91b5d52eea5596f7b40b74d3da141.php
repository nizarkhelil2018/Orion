<?php

/* OrionEventBundle:Default:index_admin.html.twig */
class __TwigTemplate_5ce9a4cc734d73be650821cdf5815fac18cf688c68b70be56fa471caf25342be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_admin.html.twig", "OrionEventBundle:Default:index_admin.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bc647231be0e4ed21e37b9b73a342a4a456338feb2688a63e746d25395d8c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc647231be0e4ed21e37b9b73a342a4a456338feb2688a63e746d25395d8c04->enter($__internal_0bc647231be0e4ed21e37b9b73a342a4a456338feb2688a63e746d25395d8c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Default:index_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc647231be0e4ed21e37b9b73a342a4a456338feb2688a63e746d25395d8c04->leave($__internal_0bc647231be0e4ed21e37b9b73a342a4a456338feb2688a63e746d25395d8c04_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_d0e476375afd3ab0fa205972acf91ca1ab802bf03899e63b6374fcf73cfc79fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e476375afd3ab0fa205972acf91ca1ab802bf03899e63b6374fcf73cfc79fa->enter($__internal_d0e476375afd3ab0fa205972acf91ca1ab802bf03899e63b6374fcf73cfc79fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_d0e476375afd3ab0fa205972acf91ca1ab802bf03899e63b6374fcf73cfc79fa->leave($__internal_d0e476375afd3ab0fa205972acf91ca1ab802bf03899e63b6374fcf73cfc79fa_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_c751744edc9f94833b1b530bfeced09f4dd03fdbf524578ac62d050b8edc2c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c751744edc9f94833b1b530bfeced09f4dd03fdbf524578ac62d050b8edc2c71->enter($__internal_c751744edc9f94833b1b530bfeced09f4dd03fdbf524578ac62d050b8edc2c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_c751744edc9f94833b1b530bfeced09f4dd03fdbf524578ac62d050b8edc2c71->leave($__internal_c751744edc9f94833b1b530bfeced09f4dd03fdbf524578ac62d050b8edc2c71_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3c4763b7b24d36c5eb835077db3b2341af218d6370a35e0e0bbdf6a2e5b0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3c4763b7b24d36c5eb835077db3b2341af218d6370a35e0e0bbdf6a2e5b0e0->enter($__internal_6f3c4763b7b24d36c5eb835077db3b2341af218d6370a35e0e0bbdf6a2e5b0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h3></br>
    
<h4 class=\"text-blue\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orion is a platform for managing business opportunities."), "html", null, true);
        echo "</h5></br>
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Being administrator, Orion Event gives you the opportunity to manage all entities. You are the only responsible for managing themes and types of events. You can also manage events, tickets and bookings made by other users.
                    For the Orion Forum module, you have the opportunity to manage forums and their categories as well as topics and answers to them."), "html", null, true);
        // line 13
        echo "
";
        
        $__internal_6f3c4763b7b24d36c5eb835077db3b2341af218d6370a35e0e0bbdf6a2e5b0e0->leave($__internal_6f3c4763b7b24d36c5eb835077db3b2341af218d6370a35e0e0bbdf6a2e5b0e0_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Default:index_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  86 => 12,  82 => 11,  74 => 9,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_admin.html.twig' %}
{% block module %}
    {{ 'Home Page'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-home\"></i> {{ 'Home Page'|trans }}
{% endblock operation %}
{% block body -%} 
<h3>{{ 'Hello'|trans }} {{ app.user.username}} </h3></br>
    
<h4 class=\"text-blue\">{{ 'Orion is a platform for managing business opportunities.'|trans }}</h5></br>
{{ 'Being administrator, Orion Event gives you the opportunity to manage all entities. You are the only responsible for managing themes and types of events. You can also manage events, tickets and bookings made by other users.
                    For the Orion Forum module, you have the opportunity to manage forums and their categories as well as topics and answers to them.'|trans }}
{% endblock %}", "OrionEventBundle:Default:index_admin.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Default/index_admin.html.twig");
    }
}
