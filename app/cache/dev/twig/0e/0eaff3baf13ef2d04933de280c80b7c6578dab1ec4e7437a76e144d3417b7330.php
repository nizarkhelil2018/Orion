<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_16b7333bb2bd4989a4945970b89f7e76be42027e6207781ec98247573e63d899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_83aac48d156857578eeadb34c3dd97bd4156fb301058508040e92bdc11813c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aac48d156857578eeadb34c3dd97bd4156fb301058508040e92bdc11813c05->enter($__internal_83aac48d156857578eeadb34c3dd97bd4156fb301058508040e92bdc11813c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83aac48d156857578eeadb34c3dd97bd4156fb301058508040e92bdc11813c05->leave($__internal_83aac48d156857578eeadb34c3dd97bd4156fb301058508040e92bdc11813c05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a9be81d24e55c41d812afc1f3a8b1f8f19bcd5ba4d8b93c17b0ffe0ebd41368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9be81d24e55c41d812afc1f3a8b1f8f19bcd5ba4d8b93c17b0ffe0ebd41368->enter($__internal_3a9be81d24e55c41d812afc1f3a8b1f8f19bcd5ba4d8b93c17b0ffe0ebd41368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3a9be81d24e55c41d812afc1f3a8b1f8f19bcd5ba4d8b93c17b0ffe0ebd41368->leave($__internal_3a9be81d24e55c41d812afc1f3a8b1f8f19bcd5ba4d8b93c17b0ffe0ebd41368_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
