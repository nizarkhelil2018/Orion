<?php

/* OrionEventBundle:Default:index_user.html.twig */
class __TwigTemplate_3ece25f57ce7bb180792644fc503911d0a8422198267afd6c4fc4ea7cdcd694b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:Default:index_user.html.twig", 1);
        $this->blocks = array(
            'module' => array($this, 'block_module'),
            'operation' => array($this, 'block_operation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OrionEventBundle::layout_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28d2cadda6bf163631d2c0004cb050a99c0fba6afb94f95bdc771450ebbf4106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d2cadda6bf163631d2c0004cb050a99c0fba6afb94f95bdc771450ebbf4106->enter($__internal_28d2cadda6bf163631d2c0004cb050a99c0fba6afb94f95bdc771450ebbf4106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Default:index_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28d2cadda6bf163631d2c0004cb050a99c0fba6afb94f95bdc771450ebbf4106->leave($__internal_28d2cadda6bf163631d2c0004cb050a99c0fba6afb94f95bdc771450ebbf4106_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_f6fa5a8e455bf4abfe4eda037079b7fdda1e7d09c2eb119980fe94e91c38ed77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fa5a8e455bf4abfe4eda037079b7fdda1e7d09c2eb119980fe94e91c38ed77->enter($__internal_f6fa5a8e455bf4abfe4eda037079b7fdda1e7d09c2eb119980fe94e91c38ed77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_f6fa5a8e455bf4abfe4eda037079b7fdda1e7d09c2eb119980fe94e91c38ed77->leave($__internal_f6fa5a8e455bf4abfe4eda037079b7fdda1e7d09c2eb119980fe94e91c38ed77_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_973b5138830a4031d07dfcdfb0047b0db144ebf31ce27ff55db6538321349590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973b5138830a4031d07dfcdfb0047b0db144ebf31ce27ff55db6538321349590->enter($__internal_973b5138830a4031d07dfcdfb0047b0db144ebf31ce27ff55db6538321349590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "<i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_973b5138830a4031d07dfcdfb0047b0db144ebf31ce27ff55db6538321349590->leave($__internal_973b5138830a4031d07dfcdfb0047b0db144ebf31ce27ff55db6538321349590_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_efa9c43e6ba8f93a9fb60cd1411c09a17b1e4c1056bbe00ca1819017df31ea1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa9c43e6ba8f93a9fb60cd1411c09a17b1e4c1056bbe00ca1819017df31ea1d->enter($__internal_efa9c43e6ba8f93a9fb60cd1411c09a17b1e4c1056bbe00ca1819017df31ea1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </h3></br>

<h4 class=\"text-blue\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orion is a platform for managing business opportunities."), "html", null, true);
        echo "</h5></br>
";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Being an Orion Event user, you can create events and you are the only responsible for managing your created events, your tickets and the bookings made for your events
For the Orion Forum module, you have the opportunity to create discussion subjects and to answer to subjects posted by other users.
"), "html", null, true);
        // line 15
        echo "</br>
<a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_event_new");
        echo "\">
    <button type=\"button\" class=\"btn-default btn-lg\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create an Event"), "html", null, true);
        echo "</h5>
</a>
";
        
        $__internal_efa9c43e6ba8f93a9fb60cd1411c09a17b1e4c1056bbe00ca1819017df31ea1d->leave($__internal_efa9c43e6ba8f93a9fb60cd1411c09a17b1e4c1056bbe00ca1819017df31ea1d_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Default:index_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 17,  92 => 16,  89 => 15,  85 => 13,  81 => 12,  73 => 10,  67 => 8,  57 => 6,  51 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'OrionEventBundle::layout_user.html.twig' %}
{% block module %}
{{ 'Home Page'|trans }}
{% endblock module %}
{% block operation %}
<i class=\"fa fa-fw fa-home\"></i> {{ 'Home Page'|trans }}
{% endblock operation %}
{% block body -%} 

<h3>{{ 'Hello'|trans }} {{ app.user.username}} </h3></br>

<h4 class=\"text-blue\">{{ 'Orion is a platform for managing business opportunities.'|trans }}</h5></br>
{{ 'Being an Orion Event user, you can create events and you are the only responsible for managing your created events, your tickets and the bookings made for your events
For the Orion Forum module, you have the opportunity to create discussion subjects and to answer to subjects posted by other users.
'|trans }}</br>
<a href=\"{{ path('user_owned_event_new') }}\">
    <button type=\"button\" class=\"btn-default btn-lg\">{{ 'Create an Event'|trans }}</h5>
</a>
{% endblock %}", "OrionEventBundle:Default:index_user.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Default/index_user.html.twig");
    }
}
