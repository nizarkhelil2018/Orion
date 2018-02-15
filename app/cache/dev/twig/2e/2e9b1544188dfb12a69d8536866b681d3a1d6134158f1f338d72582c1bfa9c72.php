<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4588388cdcd40427b0b762401ea1615c0ad6ecea31e9a35fd1112f3b3c9d7200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_544ef71f084f0d6591a701f738fa238a1af8e68c84046698de76fe55b2fb064e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544ef71f084f0d6591a701f738fa238a1af8e68c84046698de76fe55b2fb064e->enter($__internal_544ef71f084f0d6591a701f738fa238a1af8e68c84046698de76fe55b2fb064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_544ef71f084f0d6591a701f738fa238a1af8e68c84046698de76fe55b2fb064e->leave($__internal_544ef71f084f0d6591a701f738fa238a1af8e68c84046698de76fe55b2fb064e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dffb6011ccc3fd93db3347322488e979ea4976cf5d5f75e11f642b9d46564f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffb6011ccc3fd93db3347322488e979ea4976cf5d5f75e11f642b9d46564f35->enter($__internal_dffb6011ccc3fd93db3347322488e979ea4976cf5d5f75e11f642b9d46564f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dffb6011ccc3fd93db3347322488e979ea4976cf5d5f75e11f642b9d46564f35->leave($__internal_dffb6011ccc3fd93db3347322488e979ea4976cf5d5f75e11f642b9d46564f35_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b66852084b238067520322834490716f7f579874c4fcdb1a54c05e7c1f8b0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b66852084b238067520322834490716f7f579874c4fcdb1a54c05e7c1f8b0b4->enter($__internal_4b66852084b238067520322834490716f7f579874c4fcdb1a54c05e7c1f8b0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4b66852084b238067520322834490716f7f579874c4fcdb1a54c05e7c1f8b0b4->leave($__internal_4b66852084b238067520322834490716f7f579874c4fcdb1a54c05e7c1f8b0b4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
