<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_79bc0646aa0ddf69d19aed37acf07eecbff8577d637cc115dd7cfe9946a29985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995b24d9ad7b42dfe7c11fd019152cc16969a6637001709e46a6fe3b3611ea66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995b24d9ad7b42dfe7c11fd019152cc16969a6637001709e46a6fe3b3611ea66->enter($__internal_995b24d9ad7b42dfe7c11fd019152cc16969a6637001709e46a6fe3b3611ea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_995b24d9ad7b42dfe7c11fd019152cc16969a6637001709e46a6fe3b3611ea66->leave($__internal_995b24d9ad7b42dfe7c11fd019152cc16969a6637001709e46a6fe3b3611ea66_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_36135e58249baa539de43ffd9c908e6e1697a74780d2793ff5b0c10a983b2be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36135e58249baa539de43ffd9c908e6e1697a74780d2793ff5b0c10a983b2be9->enter($__internal_36135e58249baa539de43ffd9c908e6e1697a74780d2793ff5b0c10a983b2be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_36135e58249baa539de43ffd9c908e6e1697a74780d2793ff5b0c10a983b2be9->leave($__internal_36135e58249baa539de43ffd9c908e6e1697a74780d2793ff5b0c10a983b2be9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
