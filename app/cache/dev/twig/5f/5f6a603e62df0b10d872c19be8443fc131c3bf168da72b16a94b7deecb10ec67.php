<?php

/* @OrionEvent/Evenement2/new.html.twig */
class __TwigTemplate_669e3ffd965273315243f9a6f314c430aaba0164d072df0fbba18e33037a7ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@OrionEvent/Evenement2/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d48c6fdec431973ae515aed2bb9996118b0f527c4c30f3b64e7eaf30a019e39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48c6fdec431973ae515aed2bb9996118b0f527c4c30f3b64e7eaf30a019e39b->enter($__internal_d48c6fdec431973ae515aed2bb9996118b0f527c4c30f3b64e7eaf30a019e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionEvent/Evenement2/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48c6fdec431973ae515aed2bb9996118b0f527c4c30f3b64e7eaf30a019e39b->leave($__internal_d48c6fdec431973ae515aed2bb9996118b0f527c4c30f3b64e7eaf30a019e39b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f427174a2997e9f9e79edd9585dbf63bd088cf2e5f299c7d1bae6dfa63c558f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f427174a2997e9f9e79edd9585dbf63bd088cf2e5f299c7d1bae6dfa63c558f8->enter($__internal_f427174a2997e9f9e79edd9585dbf63bd088cf2e5f299c7d1bae6dfa63c558f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Evenement creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_owned_events_all");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_f427174a2997e9f9e79edd9585dbf63bd088cf2e5f299c7d1bae6dfa63c558f8->leave($__internal_f427174a2997e9f9e79edd9585dbf63bd088cf2e5f299c7d1bae6dfa63c558f8_prof);

    }

    public function getTemplateName()
    {
        return "@OrionEvent/Evenement2/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Evenement creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('user_owned_events_all') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "@OrionEvent/Evenement2/new.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\EventBundle\\Resources\\views\\Evenement2\\new.html.twig");
    }
}
