<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_81e49ea6d985824047038066d2a2bf778575613a4f7bc4b7c2d46d45f4c4a098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_7a685177466933eb890d3fc5c736ae58db02e1645ddc9aa08989de8e7e8fbc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a685177466933eb890d3fc5c736ae58db02e1645ddc9aa08989de8e7e8fbc75->enter($__internal_7a685177466933eb890d3fc5c736ae58db02e1645ddc9aa08989de8e7e8fbc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a685177466933eb890d3fc5c736ae58db02e1645ddc9aa08989de8e7e8fbc75->leave($__internal_7a685177466933eb890d3fc5c736ae58db02e1645ddc9aa08989de8e7e8fbc75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_deb8ca89a693e9b336ad624c85fe156377f548dffe8d06b346e076c0d0baf76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb8ca89a693e9b336ad624c85fe156377f548dffe8d06b346e076c0d0baf76b->enter($__internal_deb8ca89a693e9b336ad624c85fe156377f548dffe8d06b346e076c0d0baf76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_deb8ca89a693e9b336ad624c85fe156377f548dffe8d06b346e076c0d0baf76b->leave($__internal_deb8ca89a693e9b336ad624c85fe156377f548dffe8d06b346e076c0d0baf76b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
