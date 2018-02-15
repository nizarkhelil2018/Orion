<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cee770390faab8f8e80f053b309512d760ecdf720cb31af73d31fa71d17fcba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_529022e4d89352a922cda41eeb33a08795c26005c20ba8c875453449405c2a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529022e4d89352a922cda41eeb33a08795c26005c20ba8c875453449405c2a3b->enter($__internal_529022e4d89352a922cda41eeb33a08795c26005c20ba8c875453449405c2a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529022e4d89352a922cda41eeb33a08795c26005c20ba8c875453449405c2a3b->leave($__internal_529022e4d89352a922cda41eeb33a08795c26005c20ba8c875453449405c2a3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d239144dee4ada56c2dfd8a2c442de93934e58fa3529f9f7a877567dffbb65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d239144dee4ada56c2dfd8a2c442de93934e58fa3529f9f7a877567dffbb65e->enter($__internal_8d239144dee4ada56c2dfd8a2c442de93934e58fa3529f9f7a877567dffbb65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_8d239144dee4ada56c2dfd8a2c442de93934e58fa3529f9f7a877567dffbb65e->leave($__internal_8d239144dee4ada56c2dfd8a2c442de93934e58fa3529f9f7a877567dffbb65e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}

{% endblock fos_user_content %}", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
