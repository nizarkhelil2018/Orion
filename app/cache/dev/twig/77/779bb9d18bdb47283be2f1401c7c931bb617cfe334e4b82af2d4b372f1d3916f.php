<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_c49245cdbcf87ea5f0da93ea24fb83bfda1c64c4566f61455843967b08e3e2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_207121bab6a8b1152f5505c2e4eb5ac26b435b8c33ac1405463733f5451f2f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207121bab6a8b1152f5505c2e4eb5ac26b435b8c33ac1405463733f5451f2f27->enter($__internal_207121bab6a8b1152f5505c2e4eb5ac26b435b8c33ac1405463733f5451f2f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_207121bab6a8b1152f5505c2e4eb5ac26b435b8c33ac1405463733f5451f2f27->leave($__internal_207121bab6a8b1152f5505c2e4eb5ac26b435b8c33ac1405463733f5451f2f27_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_ec0fe7614df660a73bc064035b16963d75dc0daecb5bea30fd26137e5445e542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0fe7614df660a73bc064035b16963d75dc0daecb5bea30fd26137e5445e542->enter($__internal_ec0fe7614df660a73bc064035b16963d75dc0daecb5bea30fd26137e5445e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription"), "html", null, true);
        echo "
";
        
        $__internal_ec0fe7614df660a73bc064035b16963d75dc0daecb5bea30fd26137e5445e542->leave($__internal_ec0fe7614df660a73bc064035b16963d75dc0daecb5bea30fd26137e5445e542_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_d6c71e0bb1d8820800f47a9b8da2e10f22ad0892a7358831704eae315c563c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c71e0bb1d8820800f47a9b8da2e10f22ad0892a7358831704eae315c563c9e->enter($__internal_d6c71e0bb1d8820800f47a9b8da2e10f22ad0892a7358831704eae315c563c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmation"), "html", null, true);
        echo "
";
        
        $__internal_d6c71e0bb1d8820800f47a9b8da2e10f22ad0892a7358831704eae315c563c9e->leave($__internal_d6c71e0bb1d8820800f47a9b8da2e10f22ad0892a7358831704eae315c563c9e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_734a27fc9170be64b037ef24b0b0ba646610bf412cbf3d2f9276987a85aefc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734a27fc9170be64b037ef24b0b0ba646610bf412cbf3d2f9276987a85aefc9d->enter($__internal_734a27fc9170be64b037ef24b0b0ba646610bf412cbf3d2f9276987a85aefc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 14
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 15
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 17
        echo "
";
        
        $__internal_734a27fc9170be64b037ef24b0b0ba646610bf412cbf3d2f9276987a85aefc9d->leave($__internal_734a27fc9170be64b037ef24b0b0ba646610bf412cbf3d2f9276987a85aefc9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 17,  84 => 15,  82 => 14,  78 => 13,  74 => 11,  68 => 8,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    {{ 'Inscription'|trans }}
{% endblock module %}
{% block operation %}
    <i class=\"fa fa-fw fa-check\"></i> {{ 'Confirmation'|trans }}
{% endblock operation %}
{% block body -%}  

{% trans_default_domain 'FOSUserBundle' %}


    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}

{% endblock body %}", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
