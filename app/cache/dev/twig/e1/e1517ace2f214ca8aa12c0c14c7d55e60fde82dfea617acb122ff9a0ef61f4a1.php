<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7e3f8fd31030b5efd28134e2485d274e71d2e7a11cc7d93348b812ff8545a551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_afe09da43b69a557a4a8aec9c019e85a447f28429fd268ceaa8b6d507959d5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe09da43b69a557a4a8aec9c019e85a447f28429fd268ceaa8b6d507959d5bc->enter($__internal_afe09da43b69a557a4a8aec9c019e85a447f28429fd268ceaa8b6d507959d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afe09da43b69a557a4a8aec9c019e85a447f28429fd268ceaa8b6d507959d5bc->leave($__internal_afe09da43b69a557a4a8aec9c019e85a447f28429fd268ceaa8b6d507959d5bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c36262f68922c5a0445d7b75f8f9200d1776c9dccfb6a7aa8f9205fb55b1ab09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36262f68922c5a0445d7b75f8f9200d1776c9dccfb6a7aa8f9205fb55b1ab09->enter($__internal_c36262f68922c5a0445d7b75f8f9200d1776c9dccfb6a7aa8f9205fb55b1ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c36262f68922c5a0445d7b75f8f9200d1776c9dccfb6a7aa8f9205fb55b1ab09->leave($__internal_c36262f68922c5a0445d7b75f8f9200d1776c9dccfb6a7aa8f9205fb55b1ab09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
