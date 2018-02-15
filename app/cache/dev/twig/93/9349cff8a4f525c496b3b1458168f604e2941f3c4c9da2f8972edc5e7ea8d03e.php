<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5c46184e3561599bac2f068afbf4b609d7d14658af79e8dd310ef346d091eceb extends Twig_Template
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
        $__internal_9d42519d070732c0018a6c6b2a8a8be45372dd02c50478b540ed362ac21d29f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d42519d070732c0018a6c6b2a8a8be45372dd02c50478b540ed362ac21d29f6->enter($__internal_9d42519d070732c0018a6c6b2a8a8be45372dd02c50478b540ed362ac21d29f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d42519d070732c0018a6c6b2a8a8be45372dd02c50478b540ed362ac21d29f6->leave($__internal_9d42519d070732c0018a6c6b2a8a8be45372dd02c50478b540ed362ac21d29f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a3b92c6895d211739624b0dccf7975ccdf4fa9a12dd79d8a99e1c92d477539e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3b92c6895d211739624b0dccf7975ccdf4fa9a12dd79d8a99e1c92d477539e->enter($__internal_9a3b92c6895d211739624b0dccf7975ccdf4fa9a12dd79d8a99e1c92d477539e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9a3b92c6895d211739624b0dccf7975ccdf4fa9a12dd79d8a99e1c92d477539e->leave($__internal_9a3b92c6895d211739624b0dccf7975ccdf4fa9a12dd79d8a99e1c92d477539e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a0ef9c3a151413c5621b468f05b66536ca84758dc706b516f8106e93f61e2902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ef9c3a151413c5621b468f05b66536ca84758dc706b516f8106e93f61e2902->enter($__internal_a0ef9c3a151413c5621b468f05b66536ca84758dc706b516f8106e93f61e2902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a0ef9c3a151413c5621b468f05b66536ca84758dc706b516f8106e93f61e2902->leave($__internal_a0ef9c3a151413c5621b468f05b66536ca84758dc706b516f8106e93f61e2902_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3037b0afc7abf1e9f957eb65553be72a63eb84ab8b1a4d7ed9b39f3a4824661d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3037b0afc7abf1e9f957eb65553be72a63eb84ab8b1a4d7ed9b39f3a4824661d->enter($__internal_3037b0afc7abf1e9f957eb65553be72a63eb84ab8b1a4d7ed9b39f3a4824661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3037b0afc7abf1e9f957eb65553be72a63eb84ab8b1a4d7ed9b39f3a4824661d->leave($__internal_3037b0afc7abf1e9f957eb65553be72a63eb84ab8b1a4d7ed9b39f3a4824661d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
