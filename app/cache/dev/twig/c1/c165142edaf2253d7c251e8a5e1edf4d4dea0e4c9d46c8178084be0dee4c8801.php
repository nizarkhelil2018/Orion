<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1c9504b359ab63d1e740e527fd2453655d1f2c10928815558cef6d2c87cae3c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_b1415ed3f0591269ce55a3c28dcffb7647ccd8d038955ac0cd23fd3cf90db7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1415ed3f0591269ce55a3c28dcffb7647ccd8d038955ac0cd23fd3cf90db7fa->enter($__internal_b1415ed3f0591269ce55a3c28dcffb7647ccd8d038955ac0cd23fd3cf90db7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1415ed3f0591269ce55a3c28dcffb7647ccd8d038955ac0cd23fd3cf90db7fa->leave($__internal_b1415ed3f0591269ce55a3c28dcffb7647ccd8d038955ac0cd23fd3cf90db7fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6377c3e13a110ad15aa81c407103a42672a125a74b14938791280082cf4daaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6377c3e13a110ad15aa81c407103a42672a125a74b14938791280082cf4daaa5->enter($__internal_6377c3e13a110ad15aa81c407103a42672a125a74b14938791280082cf4daaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6377c3e13a110ad15aa81c407103a42672a125a74b14938791280082cf4daaa5->leave($__internal_6377c3e13a110ad15aa81c407103a42672a125a74b14938791280082cf4daaa5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_615c222afd40e9bdc0c9148f0cffbbb6888fd6aecbe12d1fe18899872b905f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c222afd40e9bdc0c9148f0cffbbb6888fd6aecbe12d1fe18899872b905f83->enter($__internal_615c222afd40e9bdc0c9148f0cffbbb6888fd6aecbe12d1fe18899872b905f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_615c222afd40e9bdc0c9148f0cffbbb6888fd6aecbe12d1fe18899872b905f83->leave($__internal_615c222afd40e9bdc0c9148f0cffbbb6888fd6aecbe12d1fe18899872b905f83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
