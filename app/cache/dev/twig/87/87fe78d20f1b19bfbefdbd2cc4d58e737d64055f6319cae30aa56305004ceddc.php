<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4ebf37a0e0d859851da77791f0660552f8700d7ab70b51bfdbc9757948a1d6a9 extends Twig_Template
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
        $__internal_f4f7724078b35ab29b78dac90fad8135948e3854bae68d37fdd3dd47931b39e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f7724078b35ab29b78dac90fad8135948e3854bae68d37fdd3dd47931b39e1->enter($__internal_f4f7724078b35ab29b78dac90fad8135948e3854bae68d37fdd3dd47931b39e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f4f7724078b35ab29b78dac90fad8135948e3854bae68d37fdd3dd47931b39e1->leave($__internal_f4f7724078b35ab29b78dac90fad8135948e3854bae68d37fdd3dd47931b39e1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_efb0c9dbb5934e896b21b196806723a7c8a87147c641e3ab2d1b7e2582b039f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb0c9dbb5934e896b21b196806723a7c8a87147c641e3ab2d1b7e2582b039f7->enter($__internal_efb0c9dbb5934e896b21b196806723a7c8a87147c641e3ab2d1b7e2582b039f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_efb0c9dbb5934e896b21b196806723a7c8a87147c641e3ab2d1b7e2582b039f7->leave($__internal_efb0c9dbb5934e896b21b196806723a7c8a87147c641e3ab2d1b7e2582b039f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Orion-4.2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
