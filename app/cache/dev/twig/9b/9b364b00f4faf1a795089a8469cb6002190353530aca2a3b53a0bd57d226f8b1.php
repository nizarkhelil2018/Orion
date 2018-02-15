<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_190d0996522ce53fb7f8902c1d5aaf6ce928c489a7b54fc48893d349ed49049d extends Twig_Template
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
        $__internal_41c16ae73d5888c1ba305499c36481f6f67b6332ec50ab7efb5e41bc01f6c694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c16ae73d5888c1ba305499c36481f6f67b6332ec50ab7efb5e41bc01f6c694->enter($__internal_41c16ae73d5888c1ba305499c36481f6f67b6332ec50ab7efb5e41bc01f6c694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c16ae73d5888c1ba305499c36481f6f67b6332ec50ab7efb5e41bc01f6c694->leave($__internal_41c16ae73d5888c1ba305499c36481f6f67b6332ec50ab7efb5e41bc01f6c694_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_a4e08e69af468989bb6897919e660f72049c89c7dd5af45a6f6ad4030b7c183f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e08e69af468989bb6897919e660f72049c89c7dd5af45a6f6ad4030b7c183f->enter($__internal_a4e08e69af468989bb6897919e660f72049c89c7dd5af45a6f6ad4030b7c183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription"), "html", null, true);
        echo "
";
        
        $__internal_a4e08e69af468989bb6897919e660f72049c89c7dd5af45a6f6ad4030b7c183f->leave($__internal_a4e08e69af468989bb6897919e660f72049c89c7dd5af45a6f6ad4030b7c183f_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_26e96173cce185665e666ae0d58c706817c8b527cc70506f01df1b3cc1d6bf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e96173cce185665e666ae0d58c706817c8b527cc70506f01df1b3cc1d6bf75->enter($__internal_26e96173cce185665e666ae0d58c706817c8b527cc70506f01df1b3cc1d6bf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmation"), "html", null, true);
        echo "
";
        
        $__internal_26e96173cce185665e666ae0d58c706817c8b527cc70506f01df1b3cc1d6bf75->leave($__internal_26e96173cce185665e666ae0d58c706817c8b527cc70506f01df1b3cc1d6bf75_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_38fb55893ec7d1d48b0afc561c4527bdc7b25b8504f155630d8e689878228e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fb55893ec7d1d48b0afc561c4527bdc7b25b8504f155630d8e689878228e88->enter($__internal_38fb55893ec7d1d48b0afc561c4527bdc7b25b8504f155630d8e689878228e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38fb55893ec7d1d48b0afc561c4527bdc7b25b8504f155630d8e689878228e88->leave($__internal_38fb55893ec7d1d48b0afc561c4527bdc7b25b8504f155630d8e689878228e88_prof);

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
