<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_314abe1186ed502c9c28a70c1253eee043b116d1d77ab86b12f4342956771d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_040ddd4a4ba7829c5452e20e82e9e9968296f79ef2bcd35a89953a05251b3caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040ddd4a4ba7829c5452e20e82e9e9968296f79ef2bcd35a89953a05251b3caa->enter($__internal_040ddd4a4ba7829c5452e20e82e9e9968296f79ef2bcd35a89953a05251b3caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040ddd4a4ba7829c5452e20e82e9e9968296f79ef2bcd35a89953a05251b3caa->leave($__internal_040ddd4a4ba7829c5452e20e82e9e9968296f79ef2bcd35a89953a05251b3caa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df07e811c331d9e8bb1dec8592c81af1ffbda7b9f2c299856dde13cd72563367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df07e811c331d9e8bb1dec8592c81af1ffbda7b9f2c299856dde13cd72563367->enter($__internal_df07e811c331d9e8bb1dec8592c81af1ffbda7b9f2c299856dde13cd72563367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_df07e811c331d9e8bb1dec8592c81af1ffbda7b9f2c299856dde13cd72563367->leave($__internal_df07e811c331d9e8bb1dec8592c81af1ffbda7b9f2c299856dde13cd72563367_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
