<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b3365a02c3ce373215f0f689c3c703eb1464ab2a91a2ff4a54e44f7a05cb6863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_854d63d94f40fb345853439169cd7c304772cb57c09e885c51fe73d4a44d5d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854d63d94f40fb345853439169cd7c304772cb57c09e885c51fe73d4a44d5d70->enter($__internal_854d63d94f40fb345853439169cd7c304772cb57c09e885c51fe73d4a44d5d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854d63d94f40fb345853439169cd7c304772cb57c09e885c51fe73d4a44d5d70->leave($__internal_854d63d94f40fb345853439169cd7c304772cb57c09e885c51fe73d4a44d5d70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_098d1a71b0a7bc1ddce208822540e69bb605f401f2f3f1232b3cc469fc8459ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098d1a71b0a7bc1ddce208822540e69bb605f401f2f3f1232b3cc469fc8459ff->enter($__internal_098d1a71b0a7bc1ddce208822540e69bb605f401f2f3f1232b3cc469fc8459ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_098d1a71b0a7bc1ddce208822540e69bb605f401f2f3f1232b3cc469fc8459ff->leave($__internal_098d1a71b0a7bc1ddce208822540e69bb605f401f2f3f1232b3cc469fc8459ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
