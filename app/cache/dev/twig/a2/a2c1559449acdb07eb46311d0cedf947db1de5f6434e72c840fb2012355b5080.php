<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45759fb7766cc2b78cf13ed721ad8a8ff476c51e8e5e65984cbd09bd20ec7b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9cd35a573bf563219ce3d5138b65ebcaa66b872cb9f9292bd3944074f7594e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cd35a573bf563219ce3d5138b65ebcaa66b872cb9f9292bd3944074f7594e0->enter($__internal_c9cd35a573bf563219ce3d5138b65ebcaa66b872cb9f9292bd3944074f7594e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9cd35a573bf563219ce3d5138b65ebcaa66b872cb9f9292bd3944074f7594e0->leave($__internal_c9cd35a573bf563219ce3d5138b65ebcaa66b872cb9f9292bd3944074f7594e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b7f04760a10d8c7905136de7a813056f6154bad808222431cf7d42ff76f961d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7f04760a10d8c7905136de7a813056f6154bad808222431cf7d42ff76f961d->enter($__internal_8b7f04760a10d8c7905136de7a813056f6154bad808222431cf7d42ff76f961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8b7f04760a10d8c7905136de7a813056f6154bad808222431cf7d42ff76f961d->leave($__internal_8b7f04760a10d8c7905136de7a813056f6154bad808222431cf7d42ff76f961d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67bdde403cf2e7f47235a98cef5fa1a215623b417ff481c21b951ce4d478cf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bdde403cf2e7f47235a98cef5fa1a215623b417ff481c21b951ce4d478cf4e->enter($__internal_67bdde403cf2e7f47235a98cef5fa1a215623b417ff481c21b951ce4d478cf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67bdde403cf2e7f47235a98cef5fa1a215623b417ff481c21b951ce4d478cf4e->leave($__internal_67bdde403cf2e7f47235a98cef5fa1a215623b417ff481c21b951ce4d478cf4e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e69cc940c54fdfeda197c5dcb21210f1e74fd497feb01b0120eeb99d0f65eeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69cc940c54fdfeda197c5dcb21210f1e74fd497feb01b0120eeb99d0f65eeac->enter($__internal_e69cc940c54fdfeda197c5dcb21210f1e74fd497feb01b0120eeb99d0f65eeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e69cc940c54fdfeda197c5dcb21210f1e74fd497feb01b0120eeb99d0f65eeac->leave($__internal_e69cc940c54fdfeda197c5dcb21210f1e74fd497feb01b0120eeb99d0f65eeac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
