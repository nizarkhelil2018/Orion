<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f5cb222fdda361d1ccf49497019d0bcc24dea695e8e2c7a5a2228bf046fdd41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_2f6970cf163c6a7049b4f117d1fc3f3a5a621826bc52207808f3ed3b3b3390e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6970cf163c6a7049b4f117d1fc3f3a5a621826bc52207808f3ed3b3b3390e7->enter($__internal_2f6970cf163c6a7049b4f117d1fc3f3a5a621826bc52207808f3ed3b3b3390e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6970cf163c6a7049b4f117d1fc3f3a5a621826bc52207808f3ed3b3b3390e7->leave($__internal_2f6970cf163c6a7049b4f117d1fc3f3a5a621826bc52207808f3ed3b3b3390e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5d3847f088b614e4753f4e3178951802073789e9e5f1f102f092729d393e0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d3847f088b614e4753f4e3178951802073789e9e5f1f102f092729d393e0b2->enter($__internal_e5d3847f088b614e4753f4e3178951802073789e9e5f1f102f092729d393e0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e5d3847f088b614e4753f4e3178951802073789e9e5f1f102f092729d393e0b2->leave($__internal_e5d3847f088b614e4753f4e3178951802073789e9e5f1f102f092729d393e0b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
