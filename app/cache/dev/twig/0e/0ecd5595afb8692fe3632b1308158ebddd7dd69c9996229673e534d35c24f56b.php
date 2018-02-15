<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_16a40f5c1e8347061882e0c889e3f92814cd722a46bcb7e7532d8fd692173c19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_0ecfcde1c08496d368e7e5277756a968f6f72cbe381e75c95595b23aed91dff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecfcde1c08496d368e7e5277756a968f6f72cbe381e75c95595b23aed91dff4->enter($__internal_0ecfcde1c08496d368e7e5277756a968f6f72cbe381e75c95595b23aed91dff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecfcde1c08496d368e7e5277756a968f6f72cbe381e75c95595b23aed91dff4->leave($__internal_0ecfcde1c08496d368e7e5277756a968f6f72cbe381e75c95595b23aed91dff4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58480de1487ad39811019e3e24826d14287ab8cafe0c2bdf1ddf127fc6247a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58480de1487ad39811019e3e24826d14287ab8cafe0c2bdf1ddf127fc6247a9d->enter($__internal_58480de1487ad39811019e3e24826d14287ab8cafe0c2bdf1ddf127fc6247a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_58480de1487ad39811019e3e24826d14287ab8cafe0c2bdf1ddf127fc6247a9d->leave($__internal_58480de1487ad39811019e3e24826d14287ab8cafe0c2bdf1ddf127fc6247a9d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
