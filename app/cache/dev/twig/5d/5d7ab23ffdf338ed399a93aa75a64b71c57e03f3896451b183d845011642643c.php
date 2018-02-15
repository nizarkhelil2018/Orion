<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_20cc4d835daa42e8d519d8093752deb167a04b28d8c091d05ad94252bb1cc631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OrionEventBundle::layout_user.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_2385866ba2546f6f511d2b8a54707528da09bd3024dc10d3b1304babdeb85680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2385866ba2546f6f511d2b8a54707528da09bd3024dc10d3b1304babdeb85680->enter($__internal_2385866ba2546f6f511d2b8a54707528da09bd3024dc10d3b1304babdeb85680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2385866ba2546f6f511d2b8a54707528da09bd3024dc10d3b1304babdeb85680->leave($__internal_2385866ba2546f6f511d2b8a54707528da09bd3024dc10d3b1304babdeb85680_prof);

    }

    // line 2
    public function block_module($context, array $blocks = array())
    {
        $__internal_04507947f09a4edb32e8ff6dc2a6c7e047ab04b64c47a45f67512c276fdf8b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04507947f09a4edb32e8ff6dc2a6c7e047ab04b64c47a45f67512c276fdf8b21->enter($__internal_04507947f09a4edb32e8ff6dc2a6c7e047ab04b64c47a45f67512c276fdf8b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "module"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription"), "html", null, true);
        echo "
";
        
        $__internal_04507947f09a4edb32e8ff6dc2a6c7e047ab04b64c47a45f67512c276fdf8b21->leave($__internal_04507947f09a4edb32e8ff6dc2a6c7e047ab04b64c47a45f67512c276fdf8b21_prof);

    }

    // line 5
    public function block_operation($context, array $blocks = array())
    {
        $__internal_15086e44e1d044c0d2fb3d392a01f86dc9b16a62eccfe0468b7261b0d5526a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15086e44e1d044c0d2fb3d392a01f86dc9b16a62eccfe0468b7261b0d5526a48->enter($__internal_15086e44e1d044c0d2fb3d392a01f86dc9b16a62eccfe0468b7261b0d5526a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "operation"));

        // line 6
        echo "    <i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmation"), "html", null, true);
        echo "
";
        
        $__internal_15086e44e1d044c0d2fb3d392a01f86dc9b16a62eccfe0468b7261b0d5526a48->leave($__internal_15086e44e1d044c0d2fb3d392a01f86dc9b16a62eccfe0468b7261b0d5526a48_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_585651c67108a7b0a8f5b5003a2b80f9a1c98186f0aa2a496b598f631cec4b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585651c67108a7b0a8f5b5003a2b80f9a1c98186f0aa2a496b598f631cec4b74->enter($__internal_585651c67108a7b0a8f5b5003a2b80f9a1c98186f0aa2a496b598f631cec4b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_585651c67108a7b0a8f5b5003a2b80f9a1c98186f0aa2a496b598f631cec4b74->leave($__internal_585651c67108a7b0a8f5b5003a2b80f9a1c98186f0aa2a496b598f631cec4b74_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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

{% endblock body %}", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
