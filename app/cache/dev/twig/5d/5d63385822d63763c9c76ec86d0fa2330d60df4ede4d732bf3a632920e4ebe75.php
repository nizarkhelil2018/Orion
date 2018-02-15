<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_bc39a9a63acccdd9f7c72524004f71f8cf2e7bad4aa55dad64972c2190027795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4350b99eb070ba3ea4b42a40278ea0dc7038ba1f42e0002b610c09acdaf2eaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4350b99eb070ba3ea4b42a40278ea0dc7038ba1f42e0002b610c09acdaf2eaba->enter($__internal_4350b99eb070ba3ea4b42a40278ea0dc7038ba1f42e0002b610c09acdaf2eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4350b99eb070ba3ea4b42a40278ea0dc7038ba1f42e0002b610c09acdaf2eaba->leave($__internal_4350b99eb070ba3ea4b42a40278ea0dc7038ba1f42e0002b610c09acdaf2eaba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99c2b9d8cc3df4e9fe7e0b79ea9421f395e89636b2ed08bd210b3aa4d95f2367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c2b9d8cc3df4e9fe7e0b79ea9421f395e89636b2ed08bd210b3aa4d95f2367->enter($__internal_99c2b9d8cc3df4e9fe7e0b79ea9421f395e89636b2ed08bd210b3aa4d95f2367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_99c2b9d8cc3df4e9fe7e0b79ea9421f395e89636b2ed08bd210b3aa4d95f2367->leave($__internal_99c2b9d8cc3df4e9fe7e0b79ea9421f395e89636b2ed08bd210b3aa4d95f2367_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
