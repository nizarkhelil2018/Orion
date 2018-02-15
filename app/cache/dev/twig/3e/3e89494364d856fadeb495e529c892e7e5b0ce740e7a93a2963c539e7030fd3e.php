<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_97eb63123ce24e7d5d6b44a992c4569d81fd714dc353d282465ef3682f5a7cac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1c31a9a68b0050883f605bf03d8badf58a29e1460ba4e551d758a478044e6581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c31a9a68b0050883f605bf03d8badf58a29e1460ba4e551d758a478044e6581->enter($__internal_1c31a9a68b0050883f605bf03d8badf58a29e1460ba4e551d758a478044e6581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c31a9a68b0050883f605bf03d8badf58a29e1460ba4e551d758a478044e6581->leave($__internal_1c31a9a68b0050883f605bf03d8badf58a29e1460ba4e551d758a478044e6581_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff04259977debeacb8ab54781ab1e1bb5d7ed017ee2a6ae118d82de06247bf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff04259977debeacb8ab54781ab1e1bb5d7ed017ee2a6ae118d82de06247bf61->enter($__internal_ff04259977debeacb8ab54781ab1e1bb5d7ed017ee2a6ae118d82de06247bf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_ff04259977debeacb8ab54781ab1e1bb5d7ed017ee2a6ae118d82de06247bf61->leave($__internal_ff04259977debeacb8ab54781ab1e1bb5d7ed017ee2a6ae118d82de06247bf61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
