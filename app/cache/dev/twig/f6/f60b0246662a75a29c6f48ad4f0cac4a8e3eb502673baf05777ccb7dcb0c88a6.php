<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_cee5cd252b867350572b486ea7ec3b1e5d31fc2f18165dc00f251aae91cfbf8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7b0bc40b6a3c1db7f2c194e9be181639e95371ba05310ce7fff130755836d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b0bc40b6a3c1db7f2c194e9be181639e95371ba05310ce7fff130755836d29->enter($__internal_a7b0bc40b6a3c1db7f2c194e9be181639e95371ba05310ce7fff130755836d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a7b0bc40b6a3c1db7f2c194e9be181639e95371ba05310ce7fff130755836d29->leave($__internal_a7b0bc40b6a3c1db7f2c194e9be181639e95371ba05310ce7fff130755836d29_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_87b48971e0fdbde5c4ddb5155f2a1d73da220911870a62bc1d904a94e8765024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b48971e0fdbde5c4ddb5155f2a1d73da220911870a62bc1d904a94e8765024->enter($__internal_87b48971e0fdbde5c4ddb5155f2a1d73da220911870a62bc1d904a94e8765024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_87b48971e0fdbde5c4ddb5155f2a1d73da220911870a62bc1d904a94e8765024->leave($__internal_87b48971e0fdbde5c4ddb5155f2a1d73da220911870a62bc1d904a94e8765024_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0be0030049b1fbe370502a54dbd2452c632746856452f96d8ea933f2fb72bc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be0030049b1fbe370502a54dbd2452c632746856452f96d8ea933f2fb72bc71->enter($__internal_0be0030049b1fbe370502a54dbd2452c632746856452f96d8ea933f2fb72bc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0be0030049b1fbe370502a54dbd2452c632746856452f96d8ea933f2fb72bc71->leave($__internal_0be0030049b1fbe370502a54dbd2452c632746856452f96d8ea933f2fb72bc71_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_816d253236e39eb13a9092c546f272330a2599b38202ba70ebe500a1c9af2b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816d253236e39eb13a9092c546f272330a2599b38202ba70ebe500a1c9af2b79->enter($__internal_816d253236e39eb13a9092c546f272330a2599b38202ba70ebe500a1c9af2b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_816d253236e39eb13a9092c546f272330a2599b38202ba70ebe500a1c9af2b79->leave($__internal_816d253236e39eb13a9092c546f272330a2599b38202ba70ebe500a1c9af2b79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
