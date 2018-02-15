<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f1b0ebde011c3df8c29daf8364aee8b3f7821ca6765eaac379da36ac33babdb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fafc25e8630bcfd149c81e05866c2c8beca7dfdf772ae347283ef308bd82ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fafc25e8630bcfd149c81e05866c2c8beca7dfdf772ae347283ef308bd82ea9->enter($__internal_1fafc25e8630bcfd149c81e05866c2c8beca7dfdf772ae347283ef308bd82ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fafc25e8630bcfd149c81e05866c2c8beca7dfdf772ae347283ef308bd82ea9->leave($__internal_1fafc25e8630bcfd149c81e05866c2c8beca7dfdf772ae347283ef308bd82ea9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_785d397b03a08e6b964a8437d969277681099d3e996dff365ab4f33839c1b13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785d397b03a08e6b964a8437d969277681099d3e996dff365ab4f33839c1b13a->enter($__internal_785d397b03a08e6b964a8437d969277681099d3e996dff365ab4f33839c1b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_785d397b03a08e6b964a8437d969277681099d3e996dff365ab4f33839c1b13a->leave($__internal_785d397b03a08e6b964a8437d969277681099d3e996dff365ab4f33839c1b13a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}

{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
