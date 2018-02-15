<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c75a173586c8ca1ade7b21c4e4c59a46b4367f3739ee3e080af70a288b4e3c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_36b89d3bc8a2ce325c2e838cbb4776acf50ca0e497926a49118d4479246bf350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b89d3bc8a2ce325c2e838cbb4776acf50ca0e497926a49118d4479246bf350->enter($__internal_36b89d3bc8a2ce325c2e838cbb4776acf50ca0e497926a49118d4479246bf350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b89d3bc8a2ce325c2e838cbb4776acf50ca0e497926a49118d4479246bf350->leave($__internal_36b89d3bc8a2ce325c2e838cbb4776acf50ca0e497926a49118d4479246bf350_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eddd6ccc5309337fb9071198494f0c416c2585aad8996b12022ceab1bfc3c2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddd6ccc5309337fb9071198494f0c416c2585aad8996b12022ceab1bfc3c2ba->enter($__internal_eddd6ccc5309337fb9071198494f0c416c2585aad8996b12022ceab1bfc3c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_eddd6ccc5309337fb9071198494f0c416c2585aad8996b12022ceab1bfc3c2ba->leave($__internal_eddd6ccc5309337fb9071198494f0c416c2585aad8996b12022ceab1bfc3c2ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\Orion-4.2\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
