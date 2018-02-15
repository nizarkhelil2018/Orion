<?php

/* OrionForumBundle:Default:index.html.twig */
class __TwigTemplate_87f19bfc6fa8b668a5a0aa296613a2c44485ee8259caab7b0065087fb42a9e52 extends Twig_Template
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
        $__internal_69b54c0d4aafe7ca6983c132de08681f35578388cdd7e750382fde4075bf7cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b54c0d4aafe7ca6983c132de08681f35578388cdd7e750382fde4075bf7cd6->enter($__internal_69b54c0d4aafe7ca6983c132de08681f35578388cdd7e750382fde4075bf7cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrionForumBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_69b54c0d4aafe7ca6983c132de08681f35578388cdd7e750382fde4075bf7cd6->leave($__internal_69b54c0d4aafe7ca6983c132de08681f35578388cdd7e750382fde4075bf7cd6_prof);

    }

    public function getTemplateName()
    {
        return "OrionForumBundle:Default:index.html.twig";
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
", "OrionForumBundle:Default:index.html.twig", "C:\\wamp\\www\\Orion-4.2\\src\\Orion\\ForumBundle/Resources/views/Default/index.html.twig");
    }
}
