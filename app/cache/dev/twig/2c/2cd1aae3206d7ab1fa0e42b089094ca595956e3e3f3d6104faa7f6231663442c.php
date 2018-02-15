<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_b3d88281076d6b2cd04039f8c377b58d9149bc60ac50cbc16e962f1b72377b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_338298f2418e710b451dfee4247e20fbc8e19c376ff8d1f2132aa508e31b1a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338298f2418e710b451dfee4247e20fbc8e19c376ff8d1f2132aa508e31b1a25->enter($__internal_338298f2418e710b451dfee4247e20fbc8e19c376ff8d1f2132aa508e31b1a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338298f2418e710b451dfee4247e20fbc8e19c376ff8d1f2132aa508e31b1a25->leave($__internal_338298f2418e710b451dfee4247e20fbc8e19c376ff8d1f2132aa508e31b1a25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3879fd6e5ca84c2581d17ec71afca1910c59042b8ec7ebe8a3eda0434dba0da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3879fd6e5ca84c2581d17ec71afca1910c59042b8ec7ebe8a3eda0434dba0da9->enter($__internal_3879fd6e5ca84c2581d17ec71afca1910c59042b8ec7ebe8a3eda0434dba0da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_3879fd6e5ca84c2581d17ec71afca1910c59042b8ec7ebe8a3eda0434dba0da9->leave($__internal_3879fd6e5ca84c2581d17ec71afca1910c59042b8ec7ebe8a3eda0434dba0da9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
