<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f3a96dd4c0346d2c1760490409c8e5bb82d0c7ad0f2160b30df267b06c7f5571 extends Twig_Template
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
        $__internal_860a6c6a43f5c4d5b488e33cd0f6ee9153b0bdb41b2a0534b8f8118964808961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860a6c6a43f5c4d5b488e33cd0f6ee9153b0bdb41b2a0534b8f8118964808961->enter($__internal_860a6c6a43f5c4d5b488e33cd0f6ee9153b0bdb41b2a0534b8f8118964808961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_860a6c6a43f5c4d5b488e33cd0f6ee9153b0bdb41b2a0534b8f8118964808961->leave($__internal_860a6c6a43f5c4d5b488e33cd0f6ee9153b0bdb41b2a0534b8f8118964808961_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2d2aefdbe8be5fb570f43d43a5a39842ebeb5f64c7e773a12770aaeaeb62567f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2aefdbe8be5fb570f43d43a5a39842ebeb5f64c7e773a12770aaeaeb62567f->enter($__internal_2d2aefdbe8be5fb570f43d43a5a39842ebeb5f64c7e773a12770aaeaeb62567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2d2aefdbe8be5fb570f43d43a5a39842ebeb5f64c7e773a12770aaeaeb62567f->leave($__internal_2d2aefdbe8be5fb570f43d43a5a39842ebeb5f64c7e773a12770aaeaeb62567f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e8e67b9a233d546b9a90a635742790e66ace86c54a4dbdc616d50a579352a901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e67b9a233d546b9a90a635742790e66ace86c54a4dbdc616d50a579352a901->enter($__internal_e8e67b9a233d546b9a90a635742790e66ace86c54a4dbdc616d50a579352a901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8e67b9a233d546b9a90a635742790e66ace86c54a4dbdc616d50a579352a901->leave($__internal_e8e67b9a233d546b9a90a635742790e66ace86c54a4dbdc616d50a579352a901_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f23a02ffd3792eed0f00aa2f3f849b3ebf8ffb2619390dde01ca1971d32c1d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23a02ffd3792eed0f00aa2f3f849b3ebf8ffb2619390dde01ca1971d32c1d2c->enter($__internal_f23a02ffd3792eed0f00aa2f3f849b3ebf8ffb2619390dde01ca1971d32c1d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f23a02ffd3792eed0f00aa2f3f849b3ebf8ffb2619390dde01ca1971d32c1d2c->leave($__internal_f23a02ffd3792eed0f00aa2f3f849b3ebf8ffb2619390dde01ca1971d32c1d2c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
