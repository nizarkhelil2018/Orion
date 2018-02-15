<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_800879ec5df017fd0cee7472b5c60fb21b31ba65787da63c6e973b83a4fe408a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5103387328ea3f967af9664622ae1ffceb7eb12121c45e80ce63dfbf8bdb3569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5103387328ea3f967af9664622ae1ffceb7eb12121c45e80ce63dfbf8bdb3569->enter($__internal_5103387328ea3f967af9664622ae1ffceb7eb12121c45e80ce63dfbf8bdb3569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5103387328ea3f967af9664622ae1ffceb7eb12121c45e80ce63dfbf8bdb3569->leave($__internal_5103387328ea3f967af9664622ae1ffceb7eb12121c45e80ce63dfbf8bdb3569_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3c0b87e8fe7221c04e9abd1a34c8266c2b925e90c23c892a63f8e461ed66f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c0b87e8fe7221c04e9abd1a34c8266c2b925e90c23c892a63f8e461ed66f01->enter($__internal_b3c0b87e8fe7221c04e9abd1a34c8266c2b925e90c23c892a63f8e461ed66f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b3c0b87e8fe7221c04e9abd1a34c8266c2b925e90c23c892a63f8e461ed66f01->leave($__internal_b3c0b87e8fe7221c04e9abd1a34c8266c2b925e90c23c892a63f8e461ed66f01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
