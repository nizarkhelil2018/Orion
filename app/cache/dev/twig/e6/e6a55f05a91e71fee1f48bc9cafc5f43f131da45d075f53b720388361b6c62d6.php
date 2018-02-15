<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ee05e053ac02c32dd0f2a96717e36b410960d2c99c08fdde9a55e4e614824584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6695cbf55c9ca6b590a014f611166fa58f72eee69739ead1af9a760558318e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6695cbf55c9ca6b590a014f611166fa58f72eee69739ead1af9a760558318e1d->enter($__internal_6695cbf55c9ca6b590a014f611166fa58f72eee69739ead1af9a760558318e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6695cbf55c9ca6b590a014f611166fa58f72eee69739ead1af9a760558318e1d->leave($__internal_6695cbf55c9ca6b590a014f611166fa58f72eee69739ead1af9a760558318e1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13ee270b0820f02a46701b7471d9a77bc910f6783907fa51998994fe0a0e2877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ee270b0820f02a46701b7471d9a77bc910f6783907fa51998994fe0a0e2877->enter($__internal_13ee270b0820f02a46701b7471d9a77bc910f6783907fa51998994fe0a0e2877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_13ee270b0820f02a46701b7471d9a77bc910f6783907fa51998994fe0a0e2877->leave($__internal_13ee270b0820f02a46701b7471d9a77bc910f6783907fa51998994fe0a0e2877_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
