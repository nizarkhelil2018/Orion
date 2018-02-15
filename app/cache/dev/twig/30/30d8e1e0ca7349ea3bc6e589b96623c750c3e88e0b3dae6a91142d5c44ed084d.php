<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_d011912352f8b8bc1ea67ef48e0c3fd9e97c684d6918ab18f98264b4b6b219d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_49f7c2fca75084cd01f21d1dd1a9acb8af2af4093c6f1f0bd04f25341589792b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f7c2fca75084cd01f21d1dd1a9acb8af2af4093c6f1f0bd04f25341589792b->enter($__internal_49f7c2fca75084cd01f21d1dd1a9acb8af2af4093c6f1f0bd04f25341589792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49f7c2fca75084cd01f21d1dd1a9acb8af2af4093c6f1f0bd04f25341589792b->leave($__internal_49f7c2fca75084cd01f21d1dd1a9acb8af2af4093c6f1f0bd04f25341589792b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_378438a8a80a563d2819373e7d88b2764f900767cbad275da0f5b4c2c80bbaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378438a8a80a563d2819373e7d88b2764f900767cbad275da0f5b4c2c80bbaba->enter($__internal_378438a8a80a563d2819373e7d88b2764f900767cbad275da0f5b4c2c80bbaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_378438a8a80a563d2819373e7d88b2764f900767cbad275da0f5b4c2c80bbaba->leave($__internal_378438a8a80a563d2819373e7d88b2764f900767cbad275da0f5b4c2c80bbaba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
