<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b32a3b1b32f743f2d9ffb02c53eedc8b050290694d4bc973f4ef387938113fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7fe8dd6e020657eec226c30dbfcae336dc2e065074b5922f14a4188ab95cab87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8dd6e020657eec226c30dbfcae336dc2e065074b5922f14a4188ab95cab87->enter($__internal_7fe8dd6e020657eec226c30dbfcae336dc2e065074b5922f14a4188ab95cab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe8dd6e020657eec226c30dbfcae336dc2e065074b5922f14a4188ab95cab87->leave($__internal_7fe8dd6e020657eec226c30dbfcae336dc2e065074b5922f14a4188ab95cab87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23583d050c2bf2ba7f51cd61b7bc2927e4d2d746af204add3fc9b9994251e554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23583d050c2bf2ba7f51cd61b7bc2927e4d2d746af204add3fc9b9994251e554->enter($__internal_23583d050c2bf2ba7f51cd61b7bc2927e4d2d746af204add3fc9b9994251e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_23583d050c2bf2ba7f51cd61b7bc2927e4d2d746af204add3fc9b9994251e554->leave($__internal_23583d050c2bf2ba7f51cd61b7bc2927e4d2d746af204add3fc9b9994251e554_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\Orion-4.2\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
