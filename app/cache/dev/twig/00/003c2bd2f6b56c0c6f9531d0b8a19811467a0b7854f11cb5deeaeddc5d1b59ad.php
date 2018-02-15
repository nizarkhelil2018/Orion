<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_893615a07f35460049dd0869e3d72c4f5d5b5f81adb5b86f0f63a8b1928bca9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_22cbc3d458815e552e0b72637c303437914d65d27e0ca34e6cf3c7104d0ff6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cbc3d458815e552e0b72637c303437914d65d27e0ca34e6cf3c7104d0ff6d7->enter($__internal_22cbc3d458815e552e0b72637c303437914d65d27e0ca34e6cf3c7104d0ff6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22cbc3d458815e552e0b72637c303437914d65d27e0ca34e6cf3c7104d0ff6d7->leave($__internal_22cbc3d458815e552e0b72637c303437914d65d27e0ca34e6cf3c7104d0ff6d7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d815ee54a1d20f8fdf011fcee641762950f972d23d2d73b49e3053bb52e59cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d815ee54a1d20f8fdf011fcee641762950f972d23d2d73b49e3053bb52e59cf->enter($__internal_8d815ee54a1d20f8fdf011fcee641762950f972d23d2d73b49e3053bb52e59cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8d815ee54a1d20f8fdf011fcee641762950f972d23d2d73b49e3053bb52e59cf->leave($__internal_8d815ee54a1d20f8fdf011fcee641762950f972d23d2d73b49e3053bb52e59cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
