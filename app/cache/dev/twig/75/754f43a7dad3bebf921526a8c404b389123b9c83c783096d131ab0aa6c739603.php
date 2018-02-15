<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_98e005dd5cf2aa5b55d13964f69d922d3c879e4a3a70ea1d083bc86dfa847307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_934b600a1f48e9b3ecbb937f41de48c4d59110257b0556236980266df6b22385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934b600a1f48e9b3ecbb937f41de48c4d59110257b0556236980266df6b22385->enter($__internal_934b600a1f48e9b3ecbb937f41de48c4d59110257b0556236980266df6b22385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934b600a1f48e9b3ecbb937f41de48c4d59110257b0556236980266df6b22385->leave($__internal_934b600a1f48e9b3ecbb937f41de48c4d59110257b0556236980266df6b22385_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83a8c4512d340d8b940de2e7a7ec26430ce747f40fa9853d62fd8a626efd404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a8c4512d340d8b940de2e7a7ec26430ce747f40fa9853d62fd8a626efd404a->enter($__internal_83a8c4512d340d8b940de2e7a7ec26430ce747f40fa9853d62fd8a626efd404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_83a8c4512d340d8b940de2e7a7ec26430ce747f40fa9853d62fd8a626efd404a->leave($__internal_83a8c4512d340d8b940de2e7a7ec26430ce747f40fa9853d62fd8a626efd404a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
