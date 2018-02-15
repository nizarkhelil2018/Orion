<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_06dc0184fd21c3d9a8a04555a63a6c7928639c69c7e611ce44328ab3da2c4789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ceed20ff0b374fa051b239600cbe16228ca715cbd8f3098f16fce8062cd4ab60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceed20ff0b374fa051b239600cbe16228ca715cbd8f3098f16fce8062cd4ab60->enter($__internal_ceed20ff0b374fa051b239600cbe16228ca715cbd8f3098f16fce8062cd4ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceed20ff0b374fa051b239600cbe16228ca715cbd8f3098f16fce8062cd4ab60->leave($__internal_ceed20ff0b374fa051b239600cbe16228ca715cbd8f3098f16fce8062cd4ab60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ec01e57b50343907ad71e6988299fa75724a2524c7b0ec319c5fe0946a6bcc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec01e57b50343907ad71e6988299fa75724a2524c7b0ec319c5fe0946a6bcc1->enter($__internal_9ec01e57b50343907ad71e6988299fa75724a2524c7b0ec319c5fe0946a6bcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9ec01e57b50343907ad71e6988299fa75724a2524c7b0ec319c5fe0946a6bcc1->leave($__internal_9ec01e57b50343907ad71e6988299fa75724a2524c7b0ec319c5fe0946a6bcc1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
