<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2c7e15000822bc0a5c1bc608bac3cdd22e79341f53c59c62236c2d64520083d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_2c8bd7329375744dd0cd0e2fbde828f6776ada81e40aa37fb8621930f1a8de32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8bd7329375744dd0cd0e2fbde828f6776ada81e40aa37fb8621930f1a8de32->enter($__internal_2c8bd7329375744dd0cd0e2fbde828f6776ada81e40aa37fb8621930f1a8de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8bd7329375744dd0cd0e2fbde828f6776ada81e40aa37fb8621930f1a8de32->leave($__internal_2c8bd7329375744dd0cd0e2fbde828f6776ada81e40aa37fb8621930f1a8de32_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f60bcbadf5875f0b7b76744c682af4bb5d4ba5f7b817a9b2b7348489fc683ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f60bcbadf5875f0b7b76744c682af4bb5d4ba5f7b817a9b2b7348489fc683ff->enter($__internal_2f60bcbadf5875f0b7b76744c682af4bb5d4ba5f7b817a9b2b7348489fc683ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2f60bcbadf5875f0b7b76744c682af4bb5d4ba5f7b817a9b2b7348489fc683ff->leave($__internal_2f60bcbadf5875f0b7b76744c682af4bb5d4ba5f7b817a9b2b7348489fc683ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
