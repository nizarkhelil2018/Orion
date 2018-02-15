<?php

/* @OrionForum/Default/index.html.twig */
class __TwigTemplate_5df8088189f9c9cc7586ed21f7c50a7641735a46e79f1fd83e657a8b5c6dfb14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80a1da83019e2d90f1d1452e38b9377afba2a7b2d2c510be0a0e3a2b77ef3dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a1da83019e2d90f1d1452e38b9377afba2a7b2d2c510be0a0e3a2b77ef3dac->enter($__internal_80a1da83019e2d90f1d1452e38b9377afba2a7b2d2c510be0a0e3a2b77ef3dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OrionForum/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_80a1da83019e2d90f1d1452e38b9377afba2a7b2d2c510be0a0e3a2b77ef3dac->leave($__internal_80a1da83019e2d90f1d1452e38b9377afba2a7b2d2c510be0a0e3a2b77ef3dac_prof);

    }

    public function getTemplateName()
    {
        return "@OrionForum/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "@OrionForum/Default/index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
