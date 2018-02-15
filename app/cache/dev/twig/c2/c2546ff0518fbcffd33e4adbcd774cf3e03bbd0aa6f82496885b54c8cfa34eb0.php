<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ce85d63e217c40c3d2ab7a4e83ef6c6c5ef4b789b83f80bb8048ea8a97c108c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a99e5cd5fa52f1d48c9c8eb7f8e98390207480dfdd50eac359aff63a37a03abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99e5cd5fa52f1d48c9c8eb7f8e98390207480dfdd50eac359aff63a37a03abd->enter($__internal_a99e5cd5fa52f1d48c9c8eb7f8e98390207480dfdd50eac359aff63a37a03abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a99e5cd5fa52f1d48c9c8eb7f8e98390207480dfdd50eac359aff63a37a03abd->leave($__internal_a99e5cd5fa52f1d48c9c8eb7f8e98390207480dfdd50eac359aff63a37a03abd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa1aa1e3642d11ee63693cfd80d2a53761ad18339b898fdec846e30651be6023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1aa1e3642d11ee63693cfd80d2a53761ad18339b898fdec846e30651be6023->enter($__internal_fa1aa1e3642d11ee63693cfd80d2a53761ad18339b898fdec846e30651be6023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_fa1aa1e3642d11ee63693cfd80d2a53761ad18339b898fdec846e30651be6023->leave($__internal_fa1aa1e3642d11ee63693cfd80d2a53761ad18339b898fdec846e30651be6023_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}

{% endblock fos_user_content %}", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
