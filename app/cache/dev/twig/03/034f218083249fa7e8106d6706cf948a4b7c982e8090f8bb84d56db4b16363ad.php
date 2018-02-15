<?php

/* @OrionEvent/Default/index_user.html.twig */
class __TwigTemplate_ade81f8ad4a5e8a9f75d4c583a4a27d7bc3f0a56e3f6b7b9f3347638e472099c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@OrionEvent/Default/index_user.html.twig", 1);
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
        $__internal_bf1e01a70b2f70565ddd58307e822032f25b82a22475c650c9e540d942c2504a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1e01a70b2f70565ddd58307e822032f25b82a22475c650c9e540d942c2504a->enter($__internal_bf1e01a70b2f70565ddd58307e822032f25b82a22475c650c9e540d942c2504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Default/index_user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1e01a70b2f70565ddd58307e822032f25b82a22475c650c9e540d942c2504a->leave($__internal_bf1e01a70b2f70565ddd58307e822032f25b82a22475c650c9e540d942c2504a_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_6826becbaa6c3cd0457b80be188599683c42072cbc72bf9a6cb704be6ccdcdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6826becbaa6c3cd0457b80be188599683c42072cbc72bf9a6cb704be6ccdcdc9->enter($__internal_6826becbaa6c3cd0457b80be188599683c42072cbc72bf9a6cb704be6ccdcdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_6826becbaa6c3cd0457b80be188599683c42072cbc72bf9a6cb704be6ccdcdc9->leave($__internal_6826becbaa6c3cd0457b80be188599683c42072cbc72bf9a6cb704be6ccdcdc9_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_1dfdb86919b4a03480577a0550b13d28012bf21b1a314b04afb6c94e4069f3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfdb86919b4a03480577a0550b13d28012bf21b1a314b04afb6c94e4069f3cf->enter($__internal_1dfdb86919b4a03480577a0550b13d28012bf21b1a314b04afb6c94e4069f3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "<i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_1dfdb86919b4a03480577a0550b13d28012bf21b1a314b04afb6c94e4069f3cf->leave($__internal_1dfdb86919b4a03480577a0550b13d28012bf21b1a314b04afb6c94e4069f3cf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_12ce27dfb714a1089eaced60b4dc2bdb5cc472acf2f78a531d86f208cb5167b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ce27dfb714a1089eaced60b4dc2bdb5cc472acf2f78a531d86f208cb5167b0->enter($__internal_12ce27dfb714a1089eaced60b4dc2bdb5cc472acf2f78a531d86f208cb5167b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12ce27dfb714a1089eaced60b4dc2bdb5cc472acf2f78a531d86f208cb5167b0->leave($__internal_12ce27dfb714a1089eaced60b4dc2bdb5cc472acf2f78a531d86f208cb5167b0_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Default/index_user.html.twig";
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
{% endblock %}", "@OrionEvent/Default/index_user.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Default\\index_user.html.twig");
    }
}
