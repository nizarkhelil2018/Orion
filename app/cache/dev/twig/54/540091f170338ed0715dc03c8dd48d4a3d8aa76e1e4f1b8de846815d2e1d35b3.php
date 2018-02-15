<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_dfc89fc41546b3b78f6018747200a96126b8a418bcc52dc98cc9d6da9d9c83f1 extends Twig_Template
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
        $__internal_f4dbaecdf0ad5585caeca1744ab55e0bf6853f2e421ab9abdab4932967f96e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4dbaecdf0ad5585caeca1744ab55e0bf6853f2e421ab9abdab4932967f96e26->enter($__internal_f4dbaecdf0ad5585caeca1744ab55e0bf6853f2e421ab9abdab4932967f96e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4dbaecdf0ad5585caeca1744ab55e0bf6853f2e421ab9abdab4932967f96e26->leave($__internal_f4dbaecdf0ad5585caeca1744ab55e0bf6853f2e421ab9abdab4932967f96e26_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8d6b45a821bd4ec2490589d10a9ea3f0fa895f3c999bc5840928d13cd9829b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6b45a821bd4ec2490589d10a9ea3f0fa895f3c999bc5840928d13cd9829b61->enter($__internal_8d6b45a821bd4ec2490589d10a9ea3f0fa895f3c999bc5840928d13cd9829b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8d6b45a821bd4ec2490589d10a9ea3f0fa895f3c999bc5840928d13cd9829b61->leave($__internal_8d6b45a821bd4ec2490589d10a9ea3f0fa895f3c999bc5840928d13cd9829b61_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_31244d4dde383e093fd1da0dd59e9983b9e18b82041996e5095f90be2be1e6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31244d4dde383e093fd1da0dd59e9983b9e18b82041996e5095f90be2be1e6e5->enter($__internal_31244d4dde383e093fd1da0dd59e9983b9e18b82041996e5095f90be2be1e6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_31244d4dde383e093fd1da0dd59e9983b9e18b82041996e5095f90be2be1e6e5->leave($__internal_31244d4dde383e093fd1da0dd59e9983b9e18b82041996e5095f90be2be1e6e5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fcc846e522ec020c999ac137010fd77e3be5f02fbec2be356e011423f5fdc2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc846e522ec020c999ac137010fd77e3be5f02fbec2be356e011423f5fdc2ca->enter($__internal_fcc846e522ec020c999ac137010fd77e3be5f02fbec2be356e011423f5fdc2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fcc846e522ec020c999ac137010fd77e3be5f02fbec2be356e011423f5fdc2ca->leave($__internal_fcc846e522ec020c999ac137010fd77e3be5f02fbec2be356e011423f5fdc2ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
