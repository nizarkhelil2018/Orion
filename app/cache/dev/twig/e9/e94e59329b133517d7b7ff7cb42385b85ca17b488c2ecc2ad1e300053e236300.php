<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6dee6f9a5e0db31bd717415b9bf3c6e2a9b04ea6a2ba2846525fac600232c25a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_56fcb24751b88480c99227044f2bba3f4535c361af187409b74874bbad66f472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fcb24751b88480c99227044f2bba3f4535c361af187409b74874bbad66f472->enter($__internal_56fcb24751b88480c99227044f2bba3f4535c361af187409b74874bbad66f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56fcb24751b88480c99227044f2bba3f4535c361af187409b74874bbad66f472->leave($__internal_56fcb24751b88480c99227044f2bba3f4535c361af187409b74874bbad66f472_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_648e74a324ca6aa4cf1627f957001a5929c39fe802c6ee14cd1b19621a73cc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648e74a324ca6aa4cf1627f957001a5929c39fe802c6ee14cd1b19621a73cc46->enter($__internal_648e74a324ca6aa4cf1627f957001a5929c39fe802c6ee14cd1b19621a73cc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_648e74a324ca6aa4cf1627f957001a5929c39fe802c6ee14cd1b19621a73cc46->leave($__internal_648e74a324ca6aa4cf1627f957001a5929c39fe802c6ee14cd1b19621a73cc46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
