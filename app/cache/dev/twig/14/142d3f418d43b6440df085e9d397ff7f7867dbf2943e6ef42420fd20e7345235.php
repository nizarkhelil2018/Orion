<?php

/* OrionEventBundle:Default:index_moderator.html.twig */
class __TwigTemplate_4bd073be14212fb2876c9c49a20123cab004c2f48cd838f6633a7021d9c0fb66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "OrionEventBundle:Default:index_moderator.html.twig", 1);
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
        $__internal_49e0615de1f7c00ead863e35b08cab15236ca69f107a59ced8992fdd03b5ddb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e0615de1f7c00ead863e35b08cab15236ca69f107a59ced8992fdd03b5ddb2->enter($__internal_49e0615de1f7c00ead863e35b08cab15236ca69f107a59ced8992fdd03b5ddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionEventBundle:Default:index_moderator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e0615de1f7c00ead863e35b08cab15236ca69f107a59ced8992fdd03b5ddb2->leave($__internal_49e0615de1f7c00ead863e35b08cab15236ca69f107a59ced8992fdd03b5ddb2_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_98d9ae4802c75b0e964a4d280effc7b48a8ee89f0eca68c40f494362389b753c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d9ae4802c75b0e964a4d280effc7b48a8ee89f0eca68c40f494362389b753c->enter($__internal_98d9ae4802c75b0e964a4d280effc7b48a8ee89f0eca68c40f494362389b753c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_98d9ae4802c75b0e964a4d280effc7b48a8ee89f0eca68c40f494362389b753c->leave($__internal_98d9ae4802c75b0e964a4d280effc7b48a8ee89f0eca68c40f494362389b753c_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_b8d25e4e9f0be37197b308053d48b09d03508b5f2697f0755cc99ce170be203e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d25e4e9f0be37197b308053d48b09d03508b5f2697f0755cc99ce170be203e->enter($__internal_b8d25e4e9f0be37197b308053d48b09d03508b5f2697f0755cc99ce170be203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "<i class=\"fa fa-fw fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page"), "html", null, true);
        echo "
";
        
        $__internal_b8d25e4e9f0be37197b308053d48b09d03508b5f2697f0755cc99ce170be203e->leave($__internal_b8d25e4e9f0be37197b308053d48b09d03508b5f2697f0755cc99ce170be203e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_62755195cceda9c11f84dbe945e97b5f502155182fb6a78572fc17d82bc6a8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62755195cceda9c11f84dbe945e97b5f502155182fb6a78572fc17d82bc6a8a1->enter($__internal_62755195cceda9c11f84dbe945e97b5f502155182fb6a78572fc17d82bc6a8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Being an Orion Event moderator, you can create events and you are the only responsible for managing your created events, your tickets and the bookings made for your events
For the Orion Forum module, you have the opportunity to moderate discussion subjects and answers posted by other users.
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
        
        $__internal_62755195cceda9c11f84dbe945e97b5f502155182fb6a78572fc17d82bc6a8a1->leave($__internal_62755195cceda9c11f84dbe945e97b5f502155182fb6a78572fc17d82bc6a8a1_prof);

    }

    public function getTemplateName()
    {
        return "OrionEventBundle:Default:index_moderator.html.twig";
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
{{ 'Being an Orion Event moderator, you can create events and you are the only responsible for managing your created events, your tickets and the bookings made for your events
For the Orion Forum module, you have the opportunity to moderate discussion subjects and answers posted by other users.
'|trans }}</br>
<a href=\"{{ path('user_owned_event_new') }}\">
    <button type=\"button\" class=\"btn-default btn-lg\">{{ 'Create an Event'|trans }}</h5>
</a>
{% endblock %}", "OrionEventBundle:Default:index_moderator.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle/Resources/views/Default/index_moderator.html.twig");
    }
}
